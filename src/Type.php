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
     * @return void
     */
    protected function parse($type)
    {
        // Media and SubType are separated by a slash '/'.
        $re = '/(.*)\/(.*)/';
        preg_match($re, $type, $matches);
dump($type);
dump($matches);
        // Media.
        list($this->media, $this->mediaComment) = $this->splitComment($matches[1]);

        // SubType.
        if ($matches[2]) {
            $parts = explode(';', $matches[2]);
            list($this->subType, $this->subTypeComment) = $this->splitComment($parts[0]);
        }

        // Parameters.
        if (isset($tmp_s[1])) {
            $cnt_p = count($tmp_s);
            for ($i = 1; $i < $cnt_p; $i++) {
                $param = new TypeParameter(trim($tmp_p[$i]));
                $this->parameters[$param->name] = $param;
            }
        }
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
     * @return array Type's parameters
     */
    // xxx add getParameter
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Removes comments from a media type, subtype or parameter.
     *
     * @param string $string  String to strip comments from
     *
     * @return string String without comments
     */
    protected function splitComment($string)
    {
/*        if (strpos($string, '(') === false) {
            return $string;
        }

        $inquote   = false;
        $escaped   = false;
        $incomment = 0;
        $newstring = '';
        $comment = '';

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

        return [strtolower(trim($newstring)), $comment];*/

        // Comment.
        $re = '/\((.*)\)/';
        preg_match($re, $string, $matches);
        $comment = isset($matches[1]) ? $matches[1] : null;

        // Main.
        if ($comment !== null) {
            $re = '/(.*)\(.*\)(.*)/';
            preg_match($re, $string, $matches);
            $main = $matches[1] . $matches[2];
        }
        else {
            $main = $string;
        }

        return [strtolower(trim($main)), $comment];
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
     * @return boolean true if type is experimental, false otherwise
     */
    public function isExperimental()
    {
        if (substr($this->getMedia(), 0, 2) == 'x-'
            || substr($this->getSubType(), 0, 2) == 'x-'
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

    /**
     * Return default file extension.
     *
     * @return string A file extension without leading period.
     */
    public function getDefaultExtension()
    {
        // Strip parameters and comments.
        $type = $this->getMedia() . '/' . $this->getSubType();

        $extension = array_search($type, (new Extension())->getMap());
        if ($extension === false) {
            throw new \RuntimeException("Sorry, couldn't determine extension.");
        }

        return $extension;
    }
}
