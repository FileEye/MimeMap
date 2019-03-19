<?php

namespace FileEye\MimeMap\Map;

use FileEye\MimeMap\MappingException;

/**
 * Abstract class for mapping file extensions to MIME types.
 *
 * This class cannot be instantiated; extend from it to implement a map.
 */
abstract class AbstractMap extends BaseMap
{
    /**
     * Determines if a MIME type exists.
     *
     * @param string $type The type to be found.
     *
     * @return bool
     */
    public function hasType($type)
    {
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
        $type = strtolower($type);
        $alias = strtolower($alias);

        // Consistency checks.
        if (!$this->hasType($type)) {
            throw new MappingException("Cannot set '{$alias}' as alias for '{$type}', '{$type}' not defined");
        }
        if ($this->hasType($alias)) {
            throw new MappingException("Cannot set '{$alias}' as alias for '{$type}', '{$alias}' is already defined as a type");
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
        $type = strtolower($type);
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
        $type = strtolower($type);

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
        $type = strtolower($type);
        $alias = strtolower($alias);

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
        $type = strtolower($type);
        $extension = strtolower($extension);

        if ($this->hasAlias($type)) {
            $alias = $type;
            $type_ret = $this->removeMapSubEntry('a', $alias, 'e', $extension);
            $extension_ret = $this->removeMapSubEntry('e', $extension, 't', $alias);
        } else {
            // Remove any associated aliased type as well.
            if ($associated_types = $this->getExtensionTypes($extension)) {
                foreach ($associated_types as $associated_type) {
                    if ($this->hasAlias($associated_type) && $type === $this->getAliasTypes($associated_type)[0]) {
                        $this->removeMapSubEntry('a', $associated_type, 'e', $extension);
                        $this->removeMapSubEntry('e', $extension, 't', $associated_type);
                    }
                }
            }
            $type_ret = $this->removeMapSubEntry('t', $type, 'e', $extension);
            $extension_ret = $this->removeMapSubEntry('e', $extension, 't', $type);
        }

        return $type_ret && $extension_ret;
    }

    /**
     * Gets the parent types of an alias.
     *
     * @param string $alias The alias to be found.
     *
     * @return string[]
     */
    public function getAliasTypes($alias)
    {
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
        $type = strtolower($type);
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
