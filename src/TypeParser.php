<?php

namespace FileEye\MimeMap;

/**
 * Class for parsing RFC 2045 Content-Type Header Fields.
 */
class TypeParser
{
    /**
     * Parses a part of the content MIME type string.
     *
     * Splits string and comment until a delimiter is found.
     *
     * @param string $string     Input string.
     * @param int $offset        Offset to start parsing from.
     * @param string $delimiter  Stop parsing when delimiter found.
     *
     * @return array An array with the following keys:
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
