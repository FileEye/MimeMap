<?php

namespace FileEye\MimeMap\Map;

use FileEye\MimeMap\MappingException;

/**
 * Abstract class for mapping file extensions to MIME types.
 *
 * This class cannot be instantiated; extend from it to implement a map.
 */
abstract class AbstractMap
{
    /**
     * Returns the singleton.
     *
     * @return string
     */
    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * Returns this file's full qualified filename.
     *
     * @return string
     */
    public function getFileName()
    {
        throw new \LogicException(__METHOD__ . ' is not implemented in ' . get_called_class());
    }

    /**
     * Gets the map array.
     *
     * @return array
     */
    public function getMapArray()
    {
        return static::$map;
    }

    /**
     * Sorts the map.
     *
     * @return $this
     */
    public function sort()
    {
        // xx dynamic
        if (isset(static::$map['t'])) {
            ksort(static::$map['t']);
            foreach (static::$map['t'] as &$t) {
                ksort($t);
            }
        }
        if (isset(static::$map['e'])) {
            ksort(static::$map['e']);
            foreach (static::$map['e'] as &$e) {
                ksort($e);
            }
        }
        if (isset(static::$map['a'])) {
            ksort(static::$map['a']);
            foreach (static::$map['a'] as &$a) {
                ksort($a);
            }
        }
        return $this;
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
        // xx manage aliases
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
        // xx manage aliases
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

        $this->addMapEntry('t', $type, 'desc', $description);
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

        $this->addMapEntry('t', $type, 'a', $alias);
        $this->addMapEntry('a', $alias, 't', $type);
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
        $this->addMapEntry('t', $type, 'e', $extension);

        // Add entry to 'e'.
        $this->addMapEntry('e', $extension, 't', $type);

        return $this;
    }

    /**
     * Gets the content of an entry from the 't' array.
     *
     * @param string $type The extension to be found.
     *
     * @return string[] The mapped file extensions.
     */
    public function getTypeExtensions($type)
    {
        // xx manage aliases
        $res = $this->getMapSubEntry('t', $type, 'e');
        return $res ?: [];
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
        // Return false if type is not found.
        if (!$this->hasType($type)) {
            return false;
        }

        // Loop through all the associated extensions and remove them. This
        // is also removing the type itself when the last extension is removed.
        foreach ($this->getTypeExtensions($type) as $extension) {
            $this->removeTypeExtensionMapping($type, $extension);
        }

        return true;
    }

    /**
     * Removes a type-to-extension mapping.
     *
     * @param string $type
     *   A MIME type.
     * @param string $extension
     *   A file extension.
     *
     * @return bool
     *   true if the mapping was removed, false if the mapping was not present.
     */
    public function removeTypeExtensionMapping($type, $extension)
    {
        // Remove entry from 'types'.
        $type_ret = $this->removeMapEntry('t', $type, 'e', $extension);

        // Remove entry from 'extensions'.
        $extension_ret = $this->removeMapEntry('e', $extension, 't', $type);

        return $type_ret && $extension_ret;
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
        $res = $this->getMapSubEntry('e', $extension, 't');
        return $res ?: [];
    }

    /**
     * Changes the default MIME type for a file extension.
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
        return $this->setValueAsDefault('e', $extension, 't', $type);
    }

    /**
     * Gets a list of entries of the map.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $match
     *   (Optional) a match wildcard to limit the list.
     *
     * @return mixed|null
     *   The value of the entry, or null if missing.
     */
    protected function listEntries($entry, $match = null)
    {
        $entry = strtolower($entry);
        $list = array_keys(static::$map[$entry]);

        if (is_null($match)) {
            return $list;
        } else {
            $re = strtr($match, ['/' => '\\/', '*' => '.*']);
            return array_filter($list, function ($v) use ($re) {
                return preg_match("/$re/", $v) === 1;
            });
        }
    }

    /**
     * Gets the content of an entry of the map.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     *
     * @return mixed|null
     *   The value of the entry, or null if missing.
     */
    protected function getMapEntry($entry, $entry_key)
    {
        $entry = strtolower($entry);
        $entry_key = strtolower($entry_key);
        return isset(static::$map[$entry][$entry_key]) ? static::$map[$entry][$entry_key] : null;
    }

    /**
     * Gets the content of a subentry of the map.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     * @param string $sub_entry
     *   The sub entry.
     *
     * @return mixed|null
     *   The value of the entry, or null if missing.
     */
    protected function getMapSubEntry($entry, $entry_key, $sub_entry)
    {
        $entry = strtolower($entry);
        $entry_key = strtolower($entry_key);
        $sub_entry = strtolower($sub_entry);
        return isset(static::$map[$entry][$entry_key][$sub_entry]) ? static::$map[$entry][$entry_key][$sub_entry] : null;
    }

    /**
     * Adds an entry to the map.
     *
     * Checks that no duplicate entries are made.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     * @param string $sub_entry
     *   The sub entry.
     * @param string $value
     *   The value to add.
     *
     * @return $this
     */
    protected function addMapEntry($entry, $entry_key, $sub_entry, $value)
    {
        $entry = strtolower($entry);
        $entry_key = strtolower($entry_key);
        $sub_entry = strtolower($sub_entry);
        if (!isset(static::$map[$entry][$entry_key][$sub_entry])) {
            static::$map[$entry][$entry_key][$sub_entry] = [$value];
        } else {
            if (array_search($value, static::$map[$entry][$entry_key][$sub_entry]) === false) {
                static::$map[$entry][$entry_key][$sub_entry][] = $value;
            }
        }
        return $this;
    }

    /**
     * Removes an entry from the map.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     * @param string $sub_entry
     *   The sub entry.
     * @param string $value
     *   The value to remove.
     *
     * @return bool
     *   true if the entry was removed, false if the entry was not present.
     */
    protected function removeMapEntry($entry, $entry_key, $sub_entry, $value)
    {
        $entry = strtolower($entry);
        $entry_key = strtolower($entry_key);
        $sub_entry = strtolower($sub_entry);

        // Return false if no entry.
        if (!isset(static::$map[$entry][$entry_key][$sub_entry])) {
            return false;
        }

        // Return false if no value.
        $k = array_search($value, static::$map[$entry][$entry_key][$sub_entry]);
        if ($k === false) {
            return false;
        }

        // Remove the map entry.
        unset(static::$map[$entry][$entry_key][$sub_entry][$k]);

        // Remove the entry itself if no more values.
        if (empty(static::$map[$entry][$entry_key][$sub_entry])) {
            unset(static::$map[$entry][$entry_key][$sub_entry]);
        } else {
            // Resequence the remaining values.
            $tmp = [];
            foreach (static::$map[$entry][$entry_key][$sub_entry] as $v) {
                $tmp[] = $v;
            }
            static::$map[$entry][$entry_key][$sub_entry] = $tmp;
        }

        return true;
    }

    /**
     * Sets a value as the default for an entry.
     *
     * @param string $entry
     *   The main array entry.
     * @param string $entry_key
     *   The main entry value.
     * @param string $sub_entry
     *   The sub entry.
     * @param string $value
     *   The value to add.
     *
     * @throws MappingException if no mapping found.
     *
     * @return $this
     */
    protected function setValueAsDefault($entry, $entry_key, $sub_entry, $value)
    {
        $entry = strtolower($entry);
        $entry_key = strtolower($entry_key);
        $sub_entry = strtolower($sub_entry);

        // Throw exception if no entry.
        if (!isset(static::$map[$entry][$entry_key][$sub_entry])) {
            throw new MappingException("Cannot set '{$value}' as default for '{$entry_key}', '{$entry_key}' not defined");
        }

        // Throw exception if no entry-value pair.
        $k = array_search($value, static::$map[$entry][$entry_key][$sub_entry]);
        if ($k === false) {
            throw new MappingException("Cannot set '{$value}' as default for '{$entry_key}', '{$value}' not associated to '{$entry_key}'");
        }

        // Move value to top of array and resequence the rest.
        $tmp = [$value];
        foreach (static::$map[$entry][$entry_key][$sub_entry] as $kk => $v) {
            if ($kk === $k) {
                continue;
            }
            $tmp[] = $v;
        }
        static::$map[$entry][$entry_key][$sub_entry] = $tmp;

        return $this;
    }
}
