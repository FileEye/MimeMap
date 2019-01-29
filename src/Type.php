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
     * Optional MIME parameters.
     *
     * @var TypeParameter[]
     */
    protected $parameters = [];

    /**
     * The MIME types map.
     *
     * @var Map\AbstractMap
     */
    protected $map;

    /**
     * Constructor.
     *
     * The type string will be parsed and the appropriate class vars set.
     *
     * @param string $type_string
     *   (Optional) MIME type string to be parsed.
     * @param string $map_class
     *   (Optional) The FQCN of the map class to use.
     */
    public function __construct($type_string = null, $map_class = null)
    {
        if ($type_string !== null) {
            TypeParser::parse($type_string, $this);
        }
        $this->map = MapHandler::map($map_class);
    }

    /**
     * Gets a MIME type's media.
     *
     * Note: 'media' refers to the portion before the first slash.
     *
     * @return string
     *   Type's media.
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets a MIME type's media.
     *
     * @param string $media
     *   Type's media.
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * Gets a MIME type's media comment.
     *
     * @return string
     *   Type's media comment.
     */
    public function getMediaComment()
    {
        return $this->mediaComment;
    }

    /**
     * Sets a MIME type's media comment.
     *
     * @param string $comment
     *   Type's media comment.
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
     * @return string
     *   Type's subtype, null if invalid mime type.
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Sets a MIME type's subtype.
     *
     * @param string $sub_type
     *   Type's subtype.
     *
     * @return $this
     */
    public function setSubType($sub_type)
    {
        $this->subType = $sub_type;
        return $this;
    }

    /**
     * Gets a MIME type's subtype comment.
     *
     * @return string
     *   Type's subtype comment, null if invalid mime type.
     */
    public function getSubTypeComment()
    {
        return $this->subTypeComment;
    }

    /**
     * Sets a MIME type's subtype comment.
     *
     * @param string $comment
     *   Type's subtype comment.
     *
     * @return $this
     */
    public function setSubTypeComment($comment)
    {
        $this->subTypeComment = $comment;
        return $this;
    }

    /**
     * Does this type have any parameters?
     *
     * @return boolean
     *   True if type has parameters, false otherwise.
     */
    public function hasParameters()
    {
        return (bool) $this->parameters;
    }

    /**
     * Get a MIME type's parameters.
     *
     * @return TypeParameter[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Get a MIME type's parameter.
     *
     * @param string $name
     *   Parameter name
     *
     * @return TypeParameter|null
     */
    public function getParameter($name)
    {
        return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
    }

    /**
     * Add a parameter to this type
     *
     * @param string $name
     *   Parameter name.
     * @param string $value
     *   Parameter value.
     * @param string $comment
     *   Comment for this parameter.
     *
     * @return void
     */
    public function addParameter($name, $value, $comment = null)
    {
        $this->parameters[$name] = new TypeParameter($name, $value, $comment);
    }

    /**
     * Remove a parameter from this type.
     *
     * @param string $name
     *   Parameter name.
     *
     * @return void
     */
    public function removeParameter($name)
    {
        unset($this->parameters[$name]);
    }

    /**
     * Create a textual MIME type from object values.
     *
     * This function performs the opposite function of parse().
     *
     * @param int $format
     *   The format of the output string.
     *
     * @return string
     *   MIME type string.
     */
    public function toString($format = Type::FULL_TEXT)
    {
        if (!isset($this->media) || !isset($this->subType)) {
            return null;
        }
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
     * @return boolean
     *   True if type is experimental, false otherwise.
     */
    public function isExperimental()
    {
        return substr($this->getMedia(), 0, 2) == 'x-' || substr($this->getSubType(), 0, 2) == 'x-';
    }

    /**
     * Is this a vendor MIME type?
     *
     * Note: Vendor types are denoted with a leading 'vnd. in the subtype.
     *
     * @return boolean
     *   True if type is a vendor type, false otherwise.
     */
    public function isVendor()
    {
        return substr($this->getSubType(), 0, 4) == 'vnd.';
    }

    /**
     * Is this a wildcard type?
     *
     * @return boolean
     *   True if type is a wildcard, false otherwise.
     */
    public function isWildcard()
    {
        return ($this->getMedia() === '*' && $this->getSubtype() === '*') || strpos($this->getSubtype(), '*') !== false;
    }

    /**
     * Is this an alias?
     *
     * @return boolean
     *   True if type is an alias, false otherwise.
     */
    public function isAlias()
    {
        return $this->map->hasAlias($this->toString(static::SHORT_TEXT));
    }

    /**
     * Perform a wildcard match on a MIME type
     *
     * Example:
     * $type = new Type('image/png');
     * $type->wildcardMatch('image/*');
     *
     * @param string $wildcard
     *   Wildcard to check against.
     *
     * @return boolean
     *   True if there was a match, false otherwise.
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
     * Builds a list of MIME types existing in the map.
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
    protected function buildTypesList($strict = true)
    {
        $subject = $this->toString(static::SHORT_TEXT);

        // Find all types.
        $types = [];
        if (!$this->isWildcard()) {
            if ($this->map->hasType($subject)) {
                $types[] = $subject;
            }
        } else {
            foreach ($this->map->listTypes($subject) as $t) {
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
     * Returns the unaliased MIME type.
     *
     * @return Type
     *   $this if the current type is not an alias, the parent type if the
     *   current type is an alias.
     */
    protected function getUnaliasedType()
    {
        return $this->isAlias() ? new static($this->map->getAliasTypes($this->toString(static::SHORT_TEXT))[0]) : $this;
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
        $descriptions = $this->map->getTypeDescriptions($this->getUnaliasedType()->toString(static::SHORT_TEXT));
        $res = null;
        if (isset($descriptions[0])) {
            $res = $descriptions[0];
        }
        if ($include_acronym && isset($descriptions[1])) {
            $res .= ', ' . $descriptions[1];
        }
        return $res;
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
     * @throws MappingException if error and $strict is true.
     *
     * @return string[]
     */
    public function getAliases($strict = true)
    {
        // Fail if the current type is an alias already.
        if ($this->isAlias()) {
            if ($strict) {
                $subject = $this->toString(static::SHORT_TEXT);
                throw new MappingException("Cannot get aliases for '{$subject}', it is an alias itself");
            } else {
                return [];
            }
        }

        // Build the array of aliases.
        $aliases = [];
        foreach ($this->buildTypesList($strict) as $t) {
            foreach ($this->map->getTypeAliases($t) as $a) {
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
        $unaliased_type = $this->getUnaliasedType();
        $subject = $unaliased_type->toString(static::SHORT_TEXT);

        if (!$unaliased_type->isWildcard()) {
            $proceed = $this->map->hasType($subject);
        } else {
            $proceed = count($this->map->listTypes($subject)) === 1;
        }

        if (!$proceed) {
            if ($strict) {
                throw new MappingException('Cannot determine default extension for type: ' . $unaliased_type->toString(static::SHORT_TEXT));
            } else {
                return null;
            }
        }

        return $unaliased_type->getExtensions()[0];
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
        // Build the array of extensions.
        $extensions = [];
        foreach ($this->getUnaliasedType()->buildTypesList($strict) as $t) {
            foreach ($this->map->getTypeExtensions($t) as $e) {
                $extensions[$e] = $e;
            }
        }
        return array_keys($extensions);
    }
}
