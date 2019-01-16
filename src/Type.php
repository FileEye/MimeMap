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
            $p_name = static::getAttribute($sub['string']);
            $p_val = static::getValue($sub['string']);
            $this->addParameter($p_name, $p_val, $sub['comment']);
        }
    }

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
                } else {
                    $comment .= $string[$n];
                }
                $escaped = false;
            } elseif ($string[$n] == '\\') {
                if ($incomment > 0) {
                    $comment .= $string[$n];
                }
                $escaped = true;
            } elseif (!$inquote && $incomment > 0 && $string[$n] == ')') {
                $incomment--;
                if ($incomment == 0) {
                    $comment .= ' ';
                }
            } elseif (!$inquote && $string[$n] == '(') {
                $incomment++;
            } elseif ($string[$n] == '"') {
                if ($incomment > 0) {
                    $comment .= $string[$n];
                } else {
                    if ($inquote) {
                        $inquote = false;
                    } else {
                        $inquote = true;
                    }
                }
            } elseif ($incomment == 0) {
                $newstring .= $string[$n];
            } else {
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

    public function getDefaultExtension($strict = true)
    {
        $extensions = $this->getExtensions($strict);
        return isset($extensions[0]) ? $extensions[0] : null;
    }

    public function getExtensions($strict = true)
    {
        // xx use tostring here
        $type = $this->getMedia() . '/' . $this->getSubType();

        $map = new MapHandler();
        if (!isset($map->get()['types'][$type])) {
            if ($strict) {
                throw new MappingException('MIME type ' . $type . ' not found in map');
            } else {
                return [];
            }
        }
        return $map->get()['types'][$type];
    }
}
