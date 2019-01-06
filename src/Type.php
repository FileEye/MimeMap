<?php

namespace FileEye\MimeMap;

/**
 * Class for working with MIME types
 */
class Type
{
    /**
     * The MIME media type
     *
     * @var string
     */
    protected $media = '';

    /**
     * The MIME media sub-type
     *
     * @var string
     */
    protected $subType = '';

    /**
     * Optional MIME parameters
     *
     * @var array
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
     * @return boolean True if the type has been parsed, false if not
     */
    protected function parse($type)
    {
        // Media.
        $tmp = explode('/', $type);
        $this->media = strtolower(trim(static::stripComments($tmp[0], $null)));

        $this->subType    = $this->getSubType($type);
        $this->parameters = [];
        if (static::hasParameters($type)) {
            foreach (static::getParameters($type) as $param) {
                $param = new TypeParameter($param);
                $this->parameters[$param->name] = $param;
            }
        }

        return true;
    }


    /**
     * Does this type have any parameters?
     *
     * @param string $type MIME type to check
     *
     * @return boolean true if $type has parameters, false otherwise
     */
    public static function hasParameters($type)
    {
        if (strstr($type, ';')) {
            return true;
        }
        return false;
    }


    /**
     * Get a MIME type's parameters
     *
     * @param string $type MIME type to get parameters of
     *
     * @return array $type's parameters
     */
    public static function getParameters($type)
    {
        $params = [];
        $tmp    = explode(';', $type);
        for ($i = 1; $i < count($tmp); $i++) {
            $params[] = trim($tmp[$i]);
        }
        return $params;
    }


    /**
     * Strip parameters from a MIME type string.
     *
     * @param string $type MIME type string
     *
     * @return string MIME type with parameters removed
     */
    public static function stripParameters($type)
    {
        if (strstr($type, ';')) {
            return substr($type, 0, strpos($type, ';'));
        }
        return $type;
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
     * Get a MIME type's media
     *
     * Note: 'media' refers to the portion before the first slash
     *
     * @return string $type's media
     */
    public function getMedia()
    {
        return $this->media;
    }


    /**
     * Get a MIME type's subtype
     *
     * @param string $type MIME type to get subtype of
     *
     * @return string $type's subtype, null if invalid mime type
     */
    public static function getSubType($type)
    {
        $tmp = explode('/', $type);
        if (!isset($tmp[1])) {
            return null;
        }
        $tmp = explode(';', $tmp[1]);
        return strtolower(trim(static::stripComments($tmp[0], $null)));
    }


    /**
     * Create a textual MIME type from object values
     *
     * This function performs the opposite function of parse().
     *
     * @return string MIME type string
     */
    public function get()
    {
        $type = strtolower($this->media . '/' . $this->subType);
        if (count($this->parameters)) {
            foreach ($this->parameters as $key => $null) {
                $type .= '; ' . $this->parameters[$key]->get();
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
     * @param string $type MIME type to check
     *
     * @return boolean true if $type is experimental, false otherwise
     */
    public static function isExperimental($type)
    {
        if (substr(static::getMedia($type), 0, 2) == 'x-'
            || substr(static::getSubType($type), 0, 2) == 'x-'
        ) {
            return true;
        }
        return false;
    }


    /**
     * Is this a vendor MIME type?
     *
     * Note: Vendor types are denoted with a leading 'vnd. in the subtype.
     *
     * @param string $type MIME type to check
     *
     * @return boolean true if $type is a vendor type, false otherwise
     */
    public static function isVendor($type)
    {
        if (substr(static::getSubType($type), 0, 4) == 'vnd.') {
            return true;
        }
        return false;
    }


    /**
     * Is this a wildcard type?
     *
     * @param string $type MIME type to check
     *
     * @return boolean true if $type is a wildcard, false otherwise
     */
    public static function isWildcard($type)
    {
        if ($type == '*/*' || static::getSubtype($type) == '*') {
            return true;
        }
        return false;
    }


    /**
     * Perform a wildcard match on a MIME type
     *
     * Example:
     * MIME_Type::wildcardMatch('image/*', 'image/png')
     *
     * @param string $card Wildcard to check against
     * @param string $type MIME type to check
     *
     * @return boolean true if there was a match, false otherwise
     */
    public static function wildcardMatch($card, $type)
    {
        if (!static::isWildcard($card)) {
            return false;
        }

        if ($card == '*/*') {
            return true;
        }

        if (static::getMedia($card) == static::getMedia($type)) {
            return true;
        }

        return false;
    }


    /**
     * Add a parameter to this type
     *
     * @param string $name    Attribute name
     * @param string $value   Attribute value
     * @param string $comment Comment for this parameter
     *
     * @return void
     */
    public function addParameter($name, $value, $comment = false)
    {
        $tmp = new TypeParameter();

        $tmp->name               = $name;
        $tmp->value              = $value;
        $tmp->comment            = $comment;
        $this->parameters[$name] = $tmp;
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
}
