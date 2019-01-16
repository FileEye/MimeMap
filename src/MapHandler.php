<?php

namespace FileEye\MimeMap;

/**
 * Class for managing the type-to-extension map.
 */
class MapHandler
{
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
     * Constructor.
     *
     * @param array $map
     *   (Optional) The mapping to be used for this instance. If null, the
     *   default map will be used.
     */
    public function __construct(array $map = null)
    {
        if (is_null($map)) {
            $this->map = &TypeExtensionMap::$map;
        } else {
            $this->map = $map;
        }
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
     * Adds a type-to-extension mapping.
     *
     * Checks that no duplicate entries are made.
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
        if (!isset($this->map['types'][$type])) {
            $this->map['types'][$type] = [$extension];
        } else {
            if (array_search($extension, $this->map['types'][$type]) === false) {
                $this->map['types'][$type][] = $extension;
            }
        }

        // Add entry to 'extensions'.
        if (!isset($this->map['extensions'][$extension])) {
            $this->map['extensions'][$extension] = [$type];
        } else {
            if (array_search($type, $this->map['extensions'][$extension]) === false) {
                $this->map['extensions'][$extension][] = $type;
            }
        }

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

        $ret = false;

        // Remove entry from 'types'.
        if (isset($this->map['types'][$type])) {
            $key = array_search($extension, $this->map['types'][$type]);
            if ($key !== false) {
                $ret = true;
                unset($this->map['types'][$type][$key]);
                $tmp = [];
                foreach ($this->map['types'][$type] as $v) {
                    $tmp[] = $v;
                }
                $this->map['types'][$type] = $tmp;
                if (empty($this->map['types'][$type])) {
                    unset($this->map['types'][$type]);
                }
            }
        }

        // Remove entry from 'extensions'.
        if (isset($this->map['extensions'][$extension])) {
            $key = array_search($type, $this->map['extensions'][$extension]);
            if ($key !== false) {
                $ret = true;
                unset($this->map['extensions'][$extension][$key]);
                $tmp = [];
                foreach ($this->map['extensions'][$extension] as $v) {
                    $tmp[] = $v;
                }
                $this->map['extensions'][$extension] = $tmp;
                if (empty($this->map['extensions'][$extension])) {
                    unset($this->map['extensions'][$extension]);
                }
            }
        }

        return $ret;
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

        if (!isset($this->map['types'][$type])) {
            return false;
        }
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

        if (!isset($this->map['types'][$type])) {
            throw new MappingException('Cannot set ' . $extension . ' as default extension for type ' . $type . ', type not defined');
        }
        $key = array_search($extension, $this->map['types'][$type]);
        if ($key === false) {
            throw new MappingException('Cannot set ' . $extension . ' as default extension for type ' . $type . ', extension not associated to this type');
        }
        $tmp = [$extension];
        foreach ($this->map['types'][$type] as $k => $v) {
            if ($k === $key) {
                continue;
            }
            $tmp[] = $v;
        }
        $this->map['types'][$type] = $tmp;
        return $this;
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

        if (!isset($this->map['extensions'][$extension])) {
            throw new MappingException('Cannot set ' . $type . ' as default type for extension ' . $extension . ', extension not defined');
        }
        $key = array_search($type, $this->map['extensions'][$extension]);
        if ($key === false) {
            throw new MappingException('Cannot set ' . $type . ' as default type for extension ' . $extension . ', type not associated to this extension');
        }
        $tmp = [$type];
        foreach ($this->map['extensions'][$extension] as $k => $v) {
            if ($k === $key) {
                continue;
            }
            $tmp[] = $v;
        }
        $this->map['extensions'][$extension] = $tmp;
        return $this;
    }
}
