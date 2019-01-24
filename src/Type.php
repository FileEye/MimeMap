<?php

namespace FileEye\MimeMap;

/**
 * Class for working with MIME types
 */
class Type
{
    /**
     * Short format [e.g. image/jpeg] for strings.
     */
    const SHORT_TEXT = 0;

    /**
     * Full format [e.g. image/jpeg; p="1"] for strings.
     */
    const FULL_TEXT = 1;

    /**
     * Full format with comments [e.g. image/jpeg; p="1" (comment)] for strings.
     */
    const FULL_TEXT_WITH_COMMENTS = 2;

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
        $media = TypeParser::parseStringPart($type, 0, '/');

        if (!$media['string']) {
            throw new MalformedTypeException('Media type not found');
        }
        if (!$media['delimiter_matched']) {
            throw new MalformedTypeException('Slash \'/\' to separate media type and subtype not found');
        }

        $this->media = strtolower($media['string']);
        $this->mediaComment = $media['comment'];

        // SubType and Parameters are separated by semicolons ';'.
        $sub = TypeParser::parseStringPart($type, $media['end_offset'] + 1, ';');

        if (!$sub['string']) {
            throw new MalformedTypeException('Media subtype not found');
        }

        $this->subType = strtolower($sub['string']);
        $this->subTypeComment = $sub['comment'];

        // Loops through the parameter.
        while ($sub['delimiter_matched']) {
            $sub = TypeParser::parseStringPart($type, $sub['end_offset'] + 1, ';');
            $tmp = explode('=', $sub['string'], 2);
            $p_name = trim($tmp[0]);
            $p_val = trim($tmp[1]);
            if ($p_val[0] == '"' && $p_val[strlen($p_val) - 1] == '"') {
                $p_val = substr($p_val, 1, -1);
            }
            $p_val = str_replace('\\"', '"', $p_val);
            $this->addParameter($p_name, $p_val, $sub['comment']);
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
     * Gets a MIME type's media.
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
     * Gets a MIME type's media comment.
     *
     * @return string Type's media comment.
     */
    public function getMediaComment()
    {
        return $this->mediaComment;
    }

    /**
     * Sets a MIME type's media comment.
     *
     * @param string Type's media comment.
     *
     * @return $this
     */
    public function setMediaComment($comment)
    {
        $this->mediaComment = $comment;
        return $this;
    }

    /**
     * Gets a MIME type's subtype.
     *
     * @return string Type's subtype, null if invalid mime type.
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Gets a MIME type's subtype comment.
     *
     * @return string Type's subtype comment, null if invalid mime type.
     */
    public function getSubTypeComment()
    {
        return $this->subTypeComment;
    }

    /**
     * Sets a MIME type's subtype comment.
     *
     * @param string Type's subtype comment.
     *
     * @return $this
     */
    public function setSubTypeComment($comment)
    {
        $this->subTypeComment = $comment;
        return $this;
    }

    /**
     * Create a textual MIME type from object values
     *
     * This function performs the opposite function of parse().
     *
     * @param int $format The format of the output string.
     *
     * @return string MIME type string
     */
    public function toString($format = Type::FULL_TEXT)
    {
        $type = strtolower($this->media);
        if ($format > Type::FULL_TEXT && isset($this->mediaComment)) {
            $type .= ' (' .  $this->mediaComment . ')';
        }
        $type .= '/' . strtolower($this->subType);
        if ($format > Type::FULL_TEXT && isset($this->subTypeComment)) {
            $type .= ' (' .  $this->subTypeComment . ')';
        }
        if ($format > Type::SHORT_TEXT && count($this->parameters)) {
            foreach ($this->parameters as $parameter) {
                $type .= '; ' . $parameter->toString($format);
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
     * @return boolean true if type is a wildcard, false otherwise.
     */
    public function isWildcard()
    {
        if (($this->getMedia() === '*' && $this->getSubtype() === '*') || strpos($this->getSubtype(), '*') !== false) {
            return true;
        }
        return false;
    }

    /**
     * Is this an alias?
     *
     * @return boolean true if type is an alias, false otherwise.
     */
    public function isAlias()
    {
        if ($this->isWildcard()) {
            return false;
        }

        $map = MapHandler::map();
        $subject = $this->toString(static::SHORT_TEXT);
        return $map->hasAlias($subject);
    }

    /**
     * Perform a wildcard match on a MIME type
     *
     * Example:
     * $type = new Type('image/png');
     * $type->wildcardMatch('image/*');
     *
     * @param string $wildcard Wildcard to check against
     *
     * @return boolean true if there was a match, false otherwise
     */
    public function wildcardMatch($wildcard)
    {
        $wildcard_type = new static($wildcard);

        if (!$wildcard_type->isWildcard()) {
            return false;
        }

        $wildcard_re = strtr($wildcard_type->toString(static::SHORT_TEXT), [
            '/' => '\\/',
            '*' => '.*',
        ]);
        $subject = $this->toString(static::SHORT_TEXT);

        return preg_match("/$wildcard_re/", $subject) === 1;
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
     * Builds a list of MIME types.
     *
     * If the current type is a wildcard, than all the types matching the
     * wildcard will be returned.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no type is
     *   found, if false it returns an empty array as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     *
     * @return string[]
     */
    public function buildTypesList($strict = true)
    {
        $map = MapHandler::map();
        $subject = $this->toString(static::SHORT_TEXT);

        // Find all types.
        $types = [];
        if (!$this->isWildcard()) {
            if ($map->hasType($subject)) {
                $types[] = $subject;
            }
        } else {
            foreach ($map->listTypes($subject) as $t) {
                $types[] = $t;
            }
        }

        // No types found, throw exception or return emtpy array.
        if (empty($types)) {
            if ($strict) {
                throw new MappingException('No MIME type found for ' . $subject . ' in map');
            } else {
                return [];
            }
        }

        return $types;
    }

    /**
     * Returns a description for the MIME type, if existing in the map.
     *
     * @param bool $include_acronym
     *   (Optional) if true and an acronym description exists for the type,
     *   the returned description will contain the acronym and its description,
     *   appended with a comma. Defaults to false.
     *
     * @return string|null
     */
    public function getDescription($include_acronym = false)
    {
        if ($this->isWildcard()) {
            return null;
        }

        $map = MapHandler::map();
        $subject = $this->toString(static::SHORT_TEXT);
        $descriptions = $map->getTypeDescriptions($subject);
        $res = null;
        if (isset($descriptions[0])) {
            $res = $descriptions[0];
        }
        if ($include_acronym && isset($descriptions[1])) {
            $res .= ', ' . $descriptions[1];
        }
        return array_keys($res);
    }

    /**
     * Returns all the aliases related to the MIME type(s).
     *
     * If the current type is a wildcard, than all aliases of all the
     * types matching the wildcard will be returned.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns an empty array as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     *
     * @return string[]
     */
    public function getAliases($strict = true)
    {
        $map = MapHandler::map();
        $types = $this->buildTypesList($strict);

        // Build the array of aliases.
        $aliases = [];
        foreach ($types as $t) {
            foreach ($map->getTypeAliases($t) as $a) {
                $aliases[$a] = $a;
            }
        }

        return array_keys($aliases);
    }

    /**
     * Returns the MIME type's preferred file extension.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns null as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     *
     * @return string
     */
    public function getDefaultExtension($strict = true)
    {
        $map = MapHandler::map();
        $subject = $this->toString(static::SHORT_TEXT);

        if (!$this->isWildcard()) {
            $proceed = $map->hasType($subject);
        } else {
            $proceed = count($map->listTypes($subject)) === 1;
        }

        if (!$proceed) {
            if ($strict) {
                throw new MappingException('Cannot determine default extension for type: ' . $this->toString(static::SHORT_TEXT));
            } else {
                return null;
            }
        }

        return $this->getExtensions()[0];
    }

    /**
     * Returns all the file extensions related to the MIME type(s).
     *
     * If the current type is a wildcard, than all extensions of all the
     * types matching the wildcard will be returned.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns an empty array as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     *
     * @return string[]
     */
    public function getExtensions($strict = true)
    {
        $map = MapHandler::map();
        $types = $this->buildTypesList($strict);

        // Build the array of extensions.
        $extensions = [];
        foreach ($types as $t) {
            foreach ($map->getTypeExtensions($t) as $e) {
                $extensions[$e] = $e;
            }
        }

        return array_keys($extensions);
    }
}
