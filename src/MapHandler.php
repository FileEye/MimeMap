<?php

namespace FileEye\MimeMap;

/**
 * Class for managing the type-to-extension map.
 */
class MapHandler
{
    /**
     * The default map PHP class.
     */
    const DEFAULT_MAP_CLASS = '\FileEye\MimeMap\TypeExtensionMap';

    /**
     * The map class to use.
     *
     * It's static so it can be overridden by ::setDefaultMapClass and any new
     * instance take the overriden setting.
     *
     * @var string
     */
    protected static $mapClass = MapHandler::DEFAULT_MAP_CLASS;

    /**
     * Mapping between file extensions and MIME types.
     *
     * The array has two main keys, 'types' that maps MIME types to file
     * extensions, and 'extensions' that map file extensions to MIME types.
     *
     * @var array
     */
    protected $map;

    /**
     * Sets a map class as default for new instances.
     *
     * @param string $class A FQCN.
     */
    public static function setDefaultMapClass($class)
    {
        static::$mapClass = $class;
    }

    /**
     * Constructor.
     *
     * @param array $map
     *   (Optional) The mapping to be used for this instance. If null, the
     *   default map will be used.
     */
    public function __construct(array $map = null)
    {
        if (is_null($map)) {
            $map_class = static::$mapClass;
            $this->map = &$map_class::$map;
        } else {
            $this->map = $map;
        }
    }

    /**
     * Returns the filename of the PHP file where the map is loaded from.
     *
     * @return string
     */
    public function getMapFileName()
    {
        $map_class = static::$mapClass;
        return $map_class::getFileName();
    }

    /**
     * Returns the map associated with this instance.
     *
     * @return array
     */
    public function get()
    {
        return $this->map;
    }

    /**
     * Sorts the map.
     *
     * @return $this
     */
    public function sort()
    {
        ksort($this->map['types']);
        ksort($this->map['extensions']);
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
        $list = array_keys($this->map['types']);

        if (is_null($match)) {
            return $list;
        } else {
            $re = strtr($match, ['/' => '\\/', '*' => '.*']);
            return array_filter($list, function($v) {
                return preg_match("/$re/", $v) === 1
            });
        }
    }

    /**
     * Lists all the extensions defined in the map.
     *
     * @return string[]
     */
    public function listExtensions()
    {
        return array_keys($this->map['extensions']);
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
        if (!isset($this->map[$key][$entry])) {
            $this->map[$key][$entry] = [$value];
        } else {
            if (array_search($value, $this->map[$key][$entry]) === false) {
                $this->map[$key][$entry][] = $value;
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
        if (!isset($this->map[$key][$entry])) {
            return false;
        }

        // Return false if no value.
        $k = array_search($value, $this->map[$key][$entry]);
        if ($k === false) {
            return false;
        }

        // Remove the map entry.
        unset($this->map[$key][$entry][$k]);

        // Remove the entry itself if no more values.
        if (empty($this->map[$key][$entry])) {
            unset($this->map[$key][$entry]);
        } else {
            // Resequence the remaining values.
            $tmp = [];
            foreach ($this->map[$key][$entry] as $v) {
                $tmp[] = $v;
            }
            $this->map[$key][$entry] = $tmp;
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
        if (!isset($this->map[$key][$entry])) {
            throw new MappingException("Cannot set '{$value}' as default for '{$entry}', '{$entry}' not defined");
        }

        // Throw exception if no entry-value pair.
        $k = array_search($value, $this->map[$key][$entry]);
        if ($k === false) {
            throw new MappingException("Cannot set '{$value}' as default for '{$entry}', '{$value}' not associated to '{$entry}'");
        }

        // Move value to top of array and resequence the rest.
        $tmp = [$value];
        foreach ($this->map[$key][$entry] as $kk => $v) {
            if ($kk === $k) {
                continue;
            }
            $tmp[] = $v;
        }
        $this->map[$key][$entry] = $tmp;

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
        if (!isset($this->map['types'][$type])) {
            return false;
        }

        // Loop through all the associated extensions and remove them. This
        // is also removing the type itself when the last extension is removed.
        foreach ($this->map['types'][$type] as $extension) {
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
