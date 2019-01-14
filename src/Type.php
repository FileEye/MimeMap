<?php

namespace FileEye\MimeMap;

/**
 * Class for working with MIME types
 */
class Type
{
    /**
     * The MIME media type.
     *
     * @var string
     */
    protected $media;

    /**
     * The MIME media type comment.
     *
     * @var string
     */
    protected $mediaComment;

    /**
     * The MIME media sub-type.
     *
     * @var string
     */
    protected $subType;

    /**
     * The MIME media sub-type comment.
     *
     * @var string
     */
    protected $subTypeComment;

    /**
     * Optional MIME parameters
     *
     * @var TypeParameter[]
     */
    protected $parameters = [];

    /**
     * Constructor.
     *
     * The type string will be parsed and the appropriate class vars set.
     *
     * @param string $type MIME type
     */
    public function __construct($type)
    {
        $this->parse($type);
    }

    /**
     * Parse a mime-type and set the class variables.
     *
     * @param string $type MIME type to parse
     *
     * @return void
     */
    protected function parse($type)
    {
        // Media and SubType are separated by a slash '/'.
        $sub = $this->parseStringPart($type, 0, '/');

        if (!$sub['string']) {
            throw new MalformedTypeException('Media type not found');
        }
        if (!$sub['delimiter_matched']) {
            throw new MalformedTypeException('Slash \'/\' to separate media type and subtype not found');
        }

        $this->media = strtolower($sub['string']);
        $this->mediaComment = $sub['comment'];
        $this->parseSubType(substr($type, $sub['end_offset'] + 1));
    }

    /**
     * Parse the sub-type part of the type and set the class variables.
     *
     * @param string $sub_type
     *
     * @return void
     */
    protected function parseSubType($sub_type)
    {
        // SubType and Parameters are separated by semicolons ';'.
        $sub = $this->parseStringPart($sub_type, 0, ';');

        if (!$sub['string']) {
            throw new MalformedTypeException('Media subtype not found');
        }

        $this->subType = strtolower($sub['string']);
        $this->subTypeComment = $sub['comment'];

        // Loops through the parameter.
        while ($sub['delimiter_matched']) {
            $sub = $this->parseStringPart($sub_type, $sub['end_offset'] + 1, ';');
            $p_name = static::getAttribute($sub_type['string']);
            $p_val = static::getValue($sub_type['string']);
            $this->addParameter($p_name, $p_val, $sub['comment']);
        }
/*        $re = '/(?<!\\\\);/';
        preg_match_all($re, $sub_type, $matches, PREG_OFFSET_CAPTURE);
        $parts = [];
        $parts_offset = 0;
        foreach ($matches[0] as $segment) {
            $parts[] = substr($sub_type, $parts_offset, $segment[1] - $parts_offset);
            $parts_offset = $segment[1] + 1;
        }
        $parts[] = substr($sub_type, $parts_offset);

        // SubType part.
        list($this->subType, $this->subTypeComment) = $this->splitComment($parts[0]);

        // Loops through the parameter parts.
        if (isset($parts[1])) {
            $cnt_p = count($parts);
            for ($i = 1; $i < $cnt_p; $i++) {
                $this->parseParameter($parts[$i]);
            }
        }*/
    }

    /**
     * Parse a parameter part of the type and set the class variables.
     *
     * @param string $parameter
     *
     * @return void
     */
    protected function parseParameter($parameter)
    {
        $p_comment = '';
        $param = static::stripComments(trim($parameter), $p_comment);
        $p_name = static::getAttribute($param);
        $p_val = static::getValue($param);
        $this->addParameter($p_name, $p_val, $p_comment !== '' ? $p_comment : null);
    }





    protected function parseStringPart($string, $offset, $delimiter)
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
                } elseif ($comment !== null) {
                    $comment .= $string[$n];
                }
                $escaped = false;
            } elseif ($string[$n] == '\\') {
                $escaped = true;
            } elseif (!$inquote && $incomment > 0 && $string[$n] == ')') {
                $incomment--;
                if ($incomment == 0 && $comment !== null) {
                    $comment .= ' ';
                }
            } elseif (!$inquote && $string[$n] == '(') {
                $incomment++;
            } elseif ($string[$n] == '"') {
                if ($inquote) {
                    $inquote = false;
                } else {
                    $inquote = true;
                }
            } elseif ($incomment == 0) {
                $newstring .= $string[$n];
            } elseif ($comment !== null) {
                $comment .= $string[$n];
            }
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




    /**
     * Removes comments from a media type, subtype or parameter.
     *
     * @param string $string  String to strip comments from
     * @param string $comment Comment is stored in there.
     *                        Do not set it to NULL if you want the comment.
     *
     * @return string String without comments
     */
    public static function stripComments($string, &$comment)
    {
        if (strpos($string, '(') === false) {
            return $string;
        }

        $inquote   = false;
        $escaped   = false;
        $incomment = 0;
        $newstring = '';

        for ($n = 0; $n < strlen($string); $n++) {
            if ($escaped) {
                if ($incomment == 0) {
                    $newstring .= $string[$n];
                } elseif ($comment !== null) {
                    $comment .= $string[$n];
                }
                $escaped = false;
            } elseif ($string[$n] == '\\') {
                $escaped = true;
            } elseif (!$inquote && $incomment > 0 && $string[$n] == ')') {
                $incomment--;
                if ($incomment == 0 && $comment !== null) {
                    $comment .= ' ';
                }
            } elseif (!$inquote && $string[$n] == '(') {
                $incomment++;
            } elseif ($string[$n] == '"') {
                if ($inquote) {
                    $inquote = false;
                } else {
                    $inquote = true;
                }
            } elseif ($incomment == 0) {
                $newstring .= $string[$n];
            } elseif ($comment !== null) {
                $comment .= $string[$n];
            }
        }

        if ($comment !== null) {
            $comment = trim($comment);
        }

        return $newstring;
    }

    /**
     * Get a parameter attribute (e.g. name)
     *
     * @param string $param MIME type parameter
     *
     * @return string Attribute name
     */
    public static function getAttribute($param)
    {
        $tmp = explode('=', $param);
        return trim($tmp[0]);
    }

    /**
     * Get a parameter value
     *
     * @param string $param MIME type parameter
     *
     * @return string Value
     */
    public static function getValue($param)
    {
        $tmp = explode('=', $param, 2);
        $value = $tmp[1];
        $value = trim($value);
        if ($value[0] == '"' && $value[strlen($value)-1] == '"') {
            $value = substr($value, 1, -1);
        }
        $value = str_replace('\\"', '"', $value);
        return $value;
    }

    /**
     * Does this type have any parameters?
     *
     * @return boolean true if type has parameters, false otherwise
     */
    public function hasParameters()
    {
        return (bool) $this->parameters;
    }

    /**
     * Get a MIME type's parameters
     *
     * @return TypeParameter[] Type's parameters
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Get a MIME type's parameter
     *
     * @param string $name Parameter name
     *
     * @return TypeParameter|null
     */
    public function getParameter($name)
    {
        return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
    }

    /**
     * Splits comments from a media type, subtype or parameter.
     *
     * @param string $string  String to split comments from
     *
     * @return string[]
     *   An array with uncommented string and the comment.
     */
    protected function splitComment($string)
    {
// \((?:(?:\\\\)+|(?:[^\(\\]|\\\)?)*)\)
//$re = '/\((?:(?:\\\\\\\\)+|(?:[^\(\\\\]|\\\\\)?)*)\)/';
//$str = '(asas)def(ghi)nn;nn(s\\"ss)';



        // Comment.
        $re = '/\((.*)\)/';
        preg_match($re, $string, $matches);
        $comment = isset($matches[1]) ? $matches[1] : null;

        // Main.
        if ($comment !== null) {
            $re = '/(.*)\(.*\)(.*)/';
            preg_match($re, $string, $matches);
            $main = (isset($matches[1]) ? $matches[1] : '') . (isset($matches[2]) ? $matches[2] : '');
        } else {
            $main = $string;
        }

        return [empty($main) ? $main : strtolower(trim($main)), $comment];
    }

    /**
     * Get a MIME type's media.
     *
     * Note: 'media' refers to the portion before the first slash.
     *
     * @return string Type's media.
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Get a MIME type's media comment.
     *
     * @return string Type's media comment.
     */
    public function getMediaComment()
    {
        return $this->mediaComment;
    }

    /**
     * Get a MIME type's subtype.
     *
     * @return string Type's subtype, null if invalid mime type.
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Get a MIME type's subtype comment.
     *
     * @return string Type's subtype comment, null if invalid mime type.
     */
    public function getSubTypeComment()
    {
        return $this->subTypeComment;
    }

    /**
     * Create a textual MIME type from object values
     *
     * This function performs the opposite function of parse().
     *
     * @return string MIME type string
     */
    public function toString()
    {
        if (is_null($this->subType)) {
            return $this->media;
        }
        $type = strtolower($this->media . '/' . $this->subType);
        if (count($this->parameters)) {
            foreach ($this->parameters as $key => $null) {
                $type .= '; ' . $this->parameters[$key]->toString();
            }
        }
        return $type;
    }

    /**
     * Is this type experimental?
     *
     * Note: Experimental types are denoted by a leading 'x-' in the media or
     *       subtype, e.g. text/x-vcard or x-world/x-vrml.
     *
     * @return boolean true if type is experimental, false otherwise
     */
    public function isExperimental()
    {
        if (substr($this->getMedia(), 0, 2) == 'x-' || substr($this->getSubType(), 0, 2) == 'x-') {
            return true;
        }
        return false;
    }

    /**
     * Is this a vendor MIME type?
     *
     * Note: Vendor types are denoted with a leading 'vnd. in the subtype.
     *
     * @return boolean true if type is a vendor type, false otherwise
     */
    public function isVendor()
    {
        if (substr($this->getSubType(), 0, 4) == 'vnd.') {
            return true;
        }
        return false;
    }

    /**
     * Is this a wildcard type?
     *
     * @return boolean true if type is a wildcard, false otherwise
     */
    public function isWildcard()
    {
        // xxx also if a subtype can be submatched i.e. vnd.ms-excel.*
        if (($this->getMedia() === '*' && $this->getSubtype() === '*') || $this->getSubtype() === '*') {
            return true;
        }
        return false;
    }

    /**
     * Perform a wildcard match on a MIME type
     *
     * Example:
     * $type = new Type('image/png');
     * $type->wildcardMatch('image/*');
     *
     * @param string $card Wildcard to check against
     *
     * @return boolean true if there was a match, false otherwise
     */
    public function wildcardMatch($card)
    {
        $match_type = new static($card);

        if (!$match_type->isWildcard()) {
            return false;
        }

        if ($match_type->getMedia() === '*' && $match_type->getSubType() === '*') {
            return true;
        }

        if ($match_type->getMedia() === $this->getMedia()) {
            return true;
        }

        return false;
    }

    /**
     * Add a parameter to this type
     *
     * @param string $name    Parameter name
     * @param string $value   Parameter value
     * @param string $comment Comment for this parameter
     *
     * @return void
     */
    public function addParameter($name, $value, $comment = null)
    {
        $this->parameters[$name] = new TypeParameter($name, $value, $comment);
    }

    /**
     * Remove a parameter from this type
     *
     * @param string $name Parameter name
     *
     * @return void
     */
    public function removeParameter($name)
    {
        unset($this->parameters[$name]);
    }

    /**
     * Return default file extension.
     *
     * @return string A file extension without leading period.
     */
    public function getDefaultExtension()
    {
        // Strip parameters and comments.
        $type = $this->getMedia() . '/' . $this->getSubType();

        $map = new TypeExtensionMap();
        if (!isset($map->get()['types'][$type])) {
            throw new \RuntimeException("Sorry, couldn't determine extension.");
        }
        return $map->get()['types'][$type][0];
    }
}
