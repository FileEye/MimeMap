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
     * Singleton instance.
     *
     * @var AbstractMap
     */
    protected static $instance;

    /**
     * Mapping between file extensions and MIME types.
     *
     * The array has two main keys, 'types' that maps MIME types to file
     * extensions, and 'extensions' that map file extensions to MIME types.
     *
     * @var array
     */
    protected static $map = [];

    /**
     * Returns the singleton.
     *
     * @return string
     */
    public function getInstance()
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
     * Sorts the map.
     *
     * @return $this
     */
    public function sort()
    {
        ksort(static::$map['types']);
        ksort(static::$map['extensions']);
        return $this;
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
        $list = array_keys(static::$map['types']);

        if (is_null($match)) {
            return $list;
        } else {
            $re = strtr($match, ['/' => '\\/', '*' => '.*']);
            return array_filter($list, function($v) use($re) {
                return preg_match("/$re/", $v) === 1;
            });
        }
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
        $list = array_keys(static::$map['extensions']);

        if (is_null($match)) {
            return $list;
        } else {
            $re = strtr($match, ['*' => '.*']);
            return array_filter($list, function($v) use($re) {
                return preg_match("/$re/", $v) === 1;
            });
        }
    }

    /**
     * Determines if an entry exists form the 'types' array.
     *
     * @param string $type The type to be found.
     *
     * @return bool
     */
    public function hasType($type)
    {
        return (bool) $this->getType($type);
    }

    /**
     * Gets the content of an entry from the 'types' array.
     *
     * @param string $type The extension to be found.
     *
     * @return string[] The mapped file extensions.
     */
    public function getType($type)
    {
        $res = $this->getMapEntry('types', $type);
        return $res ?: [];
    }

    /**
     * Determines if an entry exists form the 'extensions' array.
     *
     * @param string $extension The extension to be found.
     *
     * @return bool
     */
    public function hasExtension($extension)
    {
        return (bool) $this->getExtension($extension);
    }

    /**
     * Gets the content of an entry from the 'extensions' array.
     *
     * @param string $extension The extension to be found.
     *
     * @return string[] The mapped MIME types.
     */
    public function getExtension($extension)
    {
        $res = $this->getMapEntry('extensions', $extension);
        return $res ?: [];
    }

    /**
     * Gets the content of an entry of the map.
     *
     * @param string $key
     *   The main array key.
     * @param string $entry
     *   The sub array key.
     *
     * @return mixed|null
     *   The value of the entry, or null if missing.
     */
    protected function getMapEntry($key, $entry)
    {
        return isset(static::$map[$key][$entry]) ? static::$map[$key][$entry] : null;
    }

    /**
     * Adds an entry to the map.
     *
     * Checks that no duplicate entries are made.
     *
     * @param string $key
     *   The main array key.
     * @param string $entry
     *   The sub array key.
     * @param string $value
     *   The value to add.
     *
     * @return $this
     */
    protected function addMapEntry($key, $entry, $value)
    {
        if (!isset(static::$map[$key][$entry])) {
            static::$map[$key][$entry] = [$value];
        } else {
            if (array_search($value, static::$map[$key][$entry]) === false) {
                static::$map[$key][$entry][] = $value;
            }
        }
        return $this;
    }

    /**
     * Removes an entry from the map.
     *
     * @param string $key
     *   The main array key.
     * @param string $entry
     *   The sub array key.
     * @param string $value
     *   The value.
     *
     * @return bool
     *   true if the entry was removed, false if the entry was not present.
     */
    protected function removeMapEntry($key, $entry, $value)
    {
        // Return false if no entry.
        if (!isset(static::$map[$key][$entry])) {
            return false;
        }

        // Return false if no value.
        $k = array_search($value, static::$map[$key][$entry]);
        if ($k === false) {
            return false;
        }

        // Remove the map entry.
        unset(static::$map[$key][$entry][$k]);

        // Remove the entry itself if no more values.
        if (empty(static::$map[$key][$entry])) {
            unset(static::$map[$key][$entry]);
        } else {
            // Resequence the remaining values.
            $tmp = [];
            foreach (static::$map[$key][$entry] as $v) {
                $tmp[] = $v;
            }
            static::$map[$key][$entry] = $tmp;
        }

        return true;
    }

    /**
     * Sets a value as the default for an entry.
     *
     * @param string $key
     *   The main array key.
     * @param string $entry
     *   The sub array key.
     * @param string $value
     *   The value.
     *
     * @throws MappingException if no mapping found.
     *
     * @return $this
     */
    protected function setValueAsDefault($key, $entry, $value)
    {
        // Throw exception if no entry.
        if (!isset(static::$map[$key][$entry])) {
            throw new MappingException("Cannot set '{$value}' as default for '{$entry}', '{$entry}' not defined");
        }

        // Throw exception if no entry-value pair.
        $k = array_search($value, static::$map[$key][$entry]);
        if ($k === false) {
            throw new MappingException("Cannot set '{$value}' as default for '{$entry}', '{$value}' not associated to '{$entry}'");
        }

        // Move value to top of array and resequence the rest.
        $tmp = [$value];
        foreach (static::$map[$key][$entry] as $kk => $v) {
            if ($kk === $k) {
                continue;
            }
            $tmp[] = $v;
        }
        static::$map[$key][$entry] = $tmp;

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
     * @return $this
     */
    public function addMapping($type, $extension)
    {
        $type = strtolower($type);
        $extension = (string) strtolower($extension);

        // Add entry to 'types'.
        $this->addMapEntry('types', $type, $extension);

        // Add entry to 'extensions'.
        $this->addMapEntry('extensions', $extension, $type);

        return $this;
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
    public function removeMapping($type, $extension)
    {
        $type = strtolower($type);
        $extension = (string) strtolower($extension);

        // Remove entry from 'types'.
        $type_ret = $this->removeMapEntry('types', $type, $extension);

        // Remove entry from 'extensions'.
        $extension_ret = $this->removeMapEntry('extensions', $extension, $type);

        return $type_ret && $extension_ret;
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
        if (!isset(static::$map['types'][$type])) {
            return false;
        }

        // Loop through all the associated extensions and remove them. This
        // is also removing the type itself when the last extension is removed.
        foreach (static::$map['types'][$type] as $extension) {
            $this->removeMapping($type, $extension);
        }

        return true;
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
        $type = strtolower($type);
        $extension = (string) strtolower($extension);

        return $this->setValueAsDefault('types', $type, $extension);
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
        $type = strtolower($type);
        $extension = (string) strtolower($extension);

        return $this->setValueAsDefault('extensions', $extension, $type);
    }
}
