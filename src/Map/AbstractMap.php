<?php

namespace FileEye\MimeMap\Map;

use FileEye\MimeMap\MalformedTypeException;
use FileEye\MimeMap\MappingException;
use FileEye\MimeMap\TypeParser;

/**
 * Abstract class for mapping file extensions to MIME types.
 *
 * This class cannot be instantiated; extend from it to implement a map.
 */
abstract class AbstractMap extends BaseMap
{
    /**
     * Normalizes a mime-type string to Media/Subtype.
     *
     * @param string $type_string
     *   MIME type string to parse.
     *
     * @throws MalformedTypeException when $type_string is malformed.
     *
     * @return string
     *   A MIME type string in the 'Media/Subtype' format.
     */
    protected function normalizeType($type_string)
    {
        // Media and SubType are separated by a slash '/'.
        $media = TypeParser::parseStringPart($type_string, 0, '/');

        if (!$media['string']) {
            throw new MalformedTypeException('Media type not found');
        }
        if (!$media['delimiter_matched']) {
            throw new MalformedTypeException('Slash \'/\' to separate media type and subtype not found');
        }

        // SubType and Parameters are separated by semicolons ';'.
        $sub = TypeParser::parseStringPart($type_string, $media['end_offset'] + 1, ';');

        if (!$sub['string']) {
            throw new MalformedTypeException('Media subtype not found');
        }

        return strtolower((string) $media['string']) . '/' . strtolower((string) $sub['string']);
    }

    /**
     * Determines if a MIME type exists.
     *
     * @param string $type The type to be found.
     *
     * @return bool
     */
    public function hasType($type)
    {
        $type = $this->normalizeType($type);
        return (bool) $this->getMapEntry('t', $type);
    }

    /**
     * Determines if a MIME type alias exists.
     *
     * @param string $alias The alias to be found.
     *
     * @return bool
     */
    public function hasAlias($alias)
    {
        $alias = $this->normalizeType($alias);
        return (bool) $this->getMapEntry('a', $alias);
    }

    /**
     * Determines if an entry exists from the 'extensions' array.
     *
     * @param string $extension The extension to be found.
     *
     * @return bool
     */
    public function hasExtension($extension)
    {
        $extension = strtolower($extension);
        return (bool) $this->getMapEntry('e', $extension);
    }

    /**
     * Lists all the MIME types defined in the map.
     *
     * @param string $match (Optional) a match wildcard to limit the list.
     *
     * @return string[]
     */
    public function listTypes($match = null)
    {
        return $this->listEntries('t', $match);
    }

    /**
     * Lists all the MIME types aliases defined in the map.
     *
     * @param string $match (Optional) a match wildcard to limit the list.
     *
     * @return string[]
     */
    public function listAliases($match = null)
    {
        return $this->listEntries('a', $match);
    }

    /**
     * Lists all the extensions defined in the map.
     *
     * @param string $match (Optional) a match wildcard to limit the list.
     *
     * @return string[]
     */
    public function listExtensions($match = null)
    {
        return $this->listEntries('e', $match);
    }

    /**
     * Adds a description of a MIME type.
     *
     * @param string $type
     *   A MIME type.
     * @param string $description
     *   The description of the MIME type.
     *
     * @throws MappingException if $type is an alias.
     *
     * @return $this
     */
    public function addTypeDescription($type, $description)
    {
        $type = $this->normalizeType($type);

        // Consistency checks.
        if ($this->hasAlias($type)) {
            throw new MappingException("Cannot add description for '{$type}', '{$type}' is an alias");
        }

        $this->addMapSubEntry('t', $type, 'desc', $description);
        return $this;
    }

    /**
     * Adds an alias of a MIME type.
     *
     * @param string $type
     *   A MIME type.
     * @param string $alias
     *   An alias of $type.
     *
     * @throws MappingException if no $type is found.
     *
     * @return $this
     */
    public function addTypeAlias($type, $alias)
    {
        $type = $this->normalizeType($type);
        $alias = $this->normalizeType($alias);

        // Consistency checks.
        if (!$this->hasType($type)) {
            throw new MappingException("Cannot set '{$alias}' as alias for '{$type}', '{$type}' not defined");
        }
        if ($this->hasType($alias)) {
            throw new MappingException("Cannot set '{$alias}' as alias for '{$type}', '{$alias}' is already defined as a type");
        }
        if ($this->hasAlias($alias)) {
            $unaliased_types = $this->getAliasTypes($alias);
            if (!empty($unaliased_types) && $unaliased_types[0] !== $type) {
                throw new MappingException("Cannot set '{$alias}' as alias for '{$type}', it is an alias of '{$unaliased_types[0]}' already");
            }
            return $this;
        }

        $this->addMapSubEntry('t', $type, 'a', $alias);
        $this->addMapSubEntry('a', $alias, 't', $type);
        return $this;
    }

    /**
     * Adds a type-to-extension mapping.
     *
     * @param string $type
     *   A MIME type.
     * @param string $extension
     *   A file extension.
     *
     * @throws MappingException if $type is an alias.
     *
     * @return $this
     */
    public function addTypeExtensionMapping($type, $extension)
    {
        $type = $this->normalizeType($type);
        $extension = strtolower($extension);

        // Consistency checks.
        if ($this->hasAlias($type)) {
            throw new MappingException("Cannot map '{$extension}' to '{$type}', '{$type}' is an alias");
        }

        // Add entry to 't'.
        $this->addMapSubEntry('t', $type, 'e', $extension);

        // Add entry to 'e'.
        $this->addMapSubEntry('e', $extension, 't', $type);

        return $this;
    }

    /**
     * Gets the descriptions of a MIME type.
     *
     * @param string $type The type to be found.
     *
     * @return string[] The mapped descriptions.
     */
    public function getTypeDescriptions($type)
    {
        $type = $this->normalizeType($type);
        return $this->getMapSubEntry('t', $type, 'desc') ?: [];
    }

    /**
     * Gets the aliases of a MIME type.
     *
     * @param string $type The type to be found.
     *
     * @return string[] The mapped aliases.
     */
    public function getTypeAliases($type)
    {
        $type = $this->normalizeType($type);
        return $this->getMapSubEntry('t', $type, 'a') ?: [];
    }

    /**
     * Gets the content of an entry from the 't' array.
     *
     * @param string $type The type to be found.
     *
     * @return string[] The mapped file extensions.
     */
    public function getTypeExtensions($type)
    {
        $type = $this->normalizeType($type);
        return $this->getMapSubEntry('t', $type, 'e') ?: [];
    }

    /**
     * Changes the default extension for a MIME type.
     *
     * @param string $type
     *   A MIME type.
     * @param string $extension
     *   A file extension.
     *
     * @throws MappingException if no mapping found.
     *
     * @return $this
     */
    public function setTypeDefaultExtension($type, $extension)
    {
        $type = $this->normalizeType($type);
        $extension = strtolower($extension);
        return $this->setValueAsDefault('t', $type, 'e', $extension);
    }

    /**
     * Removes the entire mapping of a type.
     *
     * @param string $type
     *   A MIME type.
     *
     * @return bool
     *   true if the mapping was removed, false if the type was not present.
     */
    public function removeType($type)
    {
        $type = $this->normalizeType($type);

        // Return false if type is not found.
        if (!$this->hasType($type)) {
            return false;
        }

        // Loop through all the associated extensions and remove them.
        foreach ($this->getTypeExtensions($type) as $extension) {
            $this->removeTypeExtensionMapping($type, $extension);
        }

        // Loop through all the associated aliases and remove them.
        foreach ($this->getTypeAliases($type) as $alias) {
            $this->removeTypeAlias($type, $alias);
        }

        unset(static::$map['t'][$type]);

        return true;
    }

    /**
     * Removes a MIME type alias.
     *
     * @param string $type
     *   A MIME type.
     * @param string $alias
     *   The alias to be removed.
     *
     * @return bool
     *   true if the alias was removed, false if the alias was not present.
     */
    public function removeTypeAlias($type, $alias)
    {
        $type = $this->normalizeType($type);
        $alias = $this->normalizeType($alias);

        // Remove any extension mapped to the alias.
        if ($extensions = $this->getMapSubEntry('a', $alias, 'e')) {
            foreach ($extensions as $extension) {
                $this->removeMapSubEntry('a', $alias, 'e', $extension);
                $this->removeMapSubEntry('e', $extension, 't', $alias);
            }
        }

        $type_ret = $this->removeMapSubEntry('t', $type, 'a', $alias);
        $alias_ret = $this->removeMapSubEntry('a', $alias, 't', $type);

        return $type_ret && $alias_ret;
    }

    /**
     * Removes a type-to-extension mapping.
     *
     * @param string $type
     *   A MIME type.
     * @param string $extension
     *   The file extension to be removed.
     *
     * @return bool
     *   true if the mapping was removed, false if the mapping was not present.
     */
    public function removeTypeExtensionMapping($type, $extension)
    {
        $type = $this->normalizeType($type);
        $extension = strtolower($extension);

        if ($this->hasAlias($type)) {
            $alias = $type;
            $type_ret = $this->removeMapSubEntry('a', $alias, 'e', $extension);
            $extension_ret = $this->removeMapSubEntry('e', $extension, 't', $alias);
        } else {
            $this->removeAliasedTypesExtensionMapping($type, $extension);
            $type_ret = $this->removeMapSubEntry('t', $type, 'e', $extension);
            $extension_ret = $this->removeMapSubEntry('e', $extension, 't', $type);
        }

        return $type_ret && $extension_ret;
    }

    /**
     * Removes aliased types extension mapping.
     *
     * @param string $type
     *   A MIME type.
     * @param string $extension
     *   The file extension to be removed.
     */
    protected function removeAliasedTypesExtensionMapping($type, $extension)
    {
        $type = $this->normalizeType($type);
        $extension = strtolower($extension);
        foreach ($this->getExtensionTypes($extension) as $associated_type) {
            if ($this->hasAlias($associated_type) && $type === $this->getAliasTypes($associated_type)[0]) {
                $this->removeMapSubEntry('a', $associated_type, 'e', $extension);
                $this->removeMapSubEntry('e', $extension, 't', $associated_type);
            }
        }
    }

    /**
     * Gets the parent types of an alias.
     *
     * There should not be multiple types for an alias.
     *
     * @param string $alias The alias to be found.
     *
     * @return string[]
     */
    public function getAliasTypes($alias)
    {
        $alias = $this->normalizeType($alias);
        return $this->getMapSubEntry('a', $alias, 't') ?: [];
    }

    /**
     * Gets the content of an entry from the 'extensions' array.
     *
     * @param string $extension The extension to be found.
     *
     * @return string[] The mapped MIME types.
     */
    public function getExtensionTypes($extension)
    {
        $extension = strtolower($extension);
        return $this->getMapSubEntry('e', $extension, 't') ?: [];
    }

    /**
     * Changes the default MIME type for a file extension.
     *
     * Allows a MIME type alias to be set as default for the extension.
     *
     * @param string $extension
     *   A file extension.
     * @param string $type
     *   A MIME type.
     *
     * @throws MappingException if no mapping found.
     *
     * @return $this
     */
    public function setExtensionDefaultType($extension, $type)
    {
        $type = $this->normalizeType($type);
        $extension = strtolower($extension);

        if ($this->hasAlias($type)) {
            $alias = $type;
            $type = $this->getAliasTypes($alias)[0];
            // Check that the alias is referring to a type associated with that
            // extension.
            $associated_types = $this->getMapSubEntry('e', $extension, 't') ?: [];
            if (!in_array($type, $associated_types)) {
                throw new MappingException("Cannot set '{$alias}' as default type for extension '{$extension}', its unaliased type '{$type}' is not associated to '{$extension}'");
            }
            $this->addMapSubEntry('a', $alias, 'e', $extension);
            $this->addMapSubEntry('e', $extension, 't', $alias);
            return $this->setValueAsDefault('e', $extension, 't', $alias);
        } else {
            return $this->setValueAsDefault('e', $extension, 't', $type);
        }
    }
}
