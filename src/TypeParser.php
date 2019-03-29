<?php

namespace FileEye\MimeMap;

/**
 * Class for parsing RFC 2045 Content-Type Header Fields.
 */
class TypeParser
{
    /**
     * Parse a mime-type and set the class variables.
     *
     * @param string $type_string
     *   MIME type string to parse.
     * @param Type $type
     *   The Type object to receive the components.
     *
     * @throws MalformedTypeException when $type_string is malformed.
     *
     * @return void
     */
    public static function parse($type_string, Type $type)
    {
        // Media and SubType are separated by a slash '/'.
        $media = static::parseStringPart($type_string, 0, '/');

        if (!$media['string']) {
            throw new MalformedTypeException('Media type not found');
        }
        if (!$media['delimiter_matched']) {
            throw new MalformedTypeException('Slash \'/\' to separate media type and subtype not found');
        }

        $type->setMedia(strtolower((string) $media['string']));
        $type->setMediaComment($media['comment']);

        // SubType and Parameters are separated by semicolons ';'.
        $sub = static::parseStringPart($type_string, $media['end_offset'] + 1, ';');

        if (!$sub['string']) {
            throw new MalformedTypeException('Media subtype not found');
        }

        $type->setSubType(strtolower((string) $sub['string']));
        $type->setSubTypeComment($sub['comment']);

        // Loops through the parameter.
        while ($sub['delimiter_matched']) {
            $sub = static::parseStringPart($type_string, $sub['end_offset'] + 1, ';');
            $tmp = explode('=', $sub['string'], 2);
            $p_name = trim($tmp[0]);
            $p_val = trim($tmp[1]);
            $p_val = str_replace('\\"', '"', $p_val);
            $type->addParameter($p_name, $p_val, $sub['comment']);
        }
    }

    /**
     * Parses a part of the content MIME type string.
     *
     * Splits string and comment until a delimiter is found.
     *
     * @param string $string
     *   Input string.
     * @param int $offset
     *   Offset to start parsing from.
     * @param string $delimiter
     *   Stop parsing when delimiter found.
     *
     * @return array
     *   An array with the following keys:
     *   'string' - the uncommented part of $string
     *   'comment' - the comment part of $string
     *   'delimiter_matched' - true if a $delimiter stopped the parsing, false
     *                         otherwise
     *   'end_offset' - the last position parsed in $string.
     */
    public static function parseStringPart($string, $offset, $delimiter)
    {
        $inquote   = false;
        $escaped   = false;
        $incomment = 0;
        $newstring = '';
        $comment = '';

        for ($n = $offset; $n < strlen($string); $n++) {
            if ($string[$n] === $delimiter && !$escaped && !$inquote && $incomment === 0) {
                break;
            }

            if ($escaped) {
                if ($incomment == 0) {
                    $newstring .= $string[$n];
                } else {
                    $comment .= $string[$n];
                }
                $escaped = false;
                continue;
            }

            if ($string[$n] == '\\') {
                if ($incomment > 0) {
                    $comment .= $string[$n];
                }
                $escaped = true;
                continue;
            }

            if (!$inquote && $incomment > 0 && $string[$n] == ')') {
                $incomment--;
                if ($incomment == 0) {
                    $comment .= ' ';
                }
                continue;
            }

            if (!$inquote && $string[$n] == '(') {
                $incomment++;
                continue;
            }

            if ($string[$n] == '"') {
                if ($incomment > 0) {
                    $comment .= $string[$n];
                } else {
                    if ($inquote) {
                        $inquote = false;
                    } else {
                        $inquote = true;
                    }
                }
                continue;
            }

            if ($incomment == 0) {
                $newstring .= $string[$n];
                continue;
            }

            $comment .= $string[$n];
        }

        if ($incomment > 0) {
            throw new MalformedTypeException('Comment closing bracket missing: ' . $comment);
        }

        return [
          'string' => empty($newstring) ? null : trim($newstring),
          'comment' => empty($comment) ? null : trim($comment),
          'delimiter_matched' => isset($string[$n]) ? ($string[$n] === $delimiter) : false,
          'end_offset' => $n,
        ];
    }
}
