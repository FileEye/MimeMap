<?php

namespace FileEye\MimeMap;

/**
 * Class for mapping file extensions to MIME types.
 */
class MapHandler
{
    protected $map;

    public function __construct()
    {
        $this->map = &TypeExtensionMap::$map;
    }

    public function get()
    {
        return $this->map;
    }

    public function addMapping($type, $extension)
    {
        $type = strtolower($type);
        $extension = strtolower($extension);

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

    public function removeMapping($type, $extension)
    {
        $type = strtolower($type);
        $extension = strtolower($extension);

        $ret = false;

        // Remove entry from 'types'.
        if (isset($this->map['types'][$type])) {
            $key = array_search($extension, $this->map['types'][$type]);
            if ($key !== false) {
                unset($this->map['types'][$type][$key]);
                $ret = true;
                if (empty($this->map['types'][$type])) {
                    unset($this->map['types'][$type]);
                }
            }
        }

        // Remove entry from 'extensions'.
        if (isset($this->map['extensions'][$extension])) {
            $key = array_search($type, $this->map['extensions'][$extension]);
            if ($key !== false) {
                unset($this->map['extensions'][$extension][$key]);
                $ret = true;
                if (empty($this->map['extensions'][$extension])) {
                    unset($this->map['extensions'][$extension]);
                }
            }
        }

        return $ret;
    }

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

    public function setTypeDefaultExtension($type, $extension)
    {
        $type = strtolower($type);
        $extension = strtolower($extension);

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
    }

    public function setExtensionDefaultType($extension, $type)
    {
        $type = strtolower($type);
        $extension = strtolower($extension);

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
    }
}
