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

    public function getMimeTypes()
    {
        return array_keys($this->get()['types']);
    }

    public function getExtensions()
    {
        return array_keys($this->get()['extensions']);
    }

    public function addMapping($type, $extension)
    {
        $extension = strtolower($extension);

        // Add entry to 'types'.
        if (!isset($this->map['types'][$type])) {
            $this->map['types'][$type] = [$extension];
        } else {
            $this->map['types'][$type][] = $extension;
        }

        // Add entry to 'extensions'.
        if (!isset($this->map['extensions'][$extension])) {
            $this->map['extensions'][$extension] = [$type];
        } else {
            $this->map['extensions'][$extension][] = $type;
        }

        return $this;
    }

    public function removeMapping($type, $extension)
    {
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

    public function removeMimeType($type)
    {
        if (!in_array($type, $this->mapping['mimetypes'])) {
            return false;
        }
        foreach ($this->getExtensionsForMimeType($type) as $extension) {
            $this->removeMapping($extension);
        }
        $key = array_search($type, $this->mapping['mimetypes']);
        unset($this->mapping['mimetypes'][$key]);
        return true;
    }
}
