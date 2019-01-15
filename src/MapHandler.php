<?php

namespace FileEye\MimeMap;

/**
 * Class for mapping file extensions to MIME types.
 */
class TypeExtensionMap
{
    /**
     * Returns the MIME type to file extension map.
     *
     * @return array
     */
    public function get()
    {
        return TypeExtensionMap::$extensionToType;
    }

    public function getMimeTypes() {
        return array_keys($this->get()['types']);
    }

    public function getExtensions() {
        return array_keys($this->get()['extensions']);
    }
    
    public function addMapping($mimetype, $extension) {
        $extension = strtolower($extension);
        if (!in_array($mimetype, $this->mapping['mimetypes'])) {
            $this->mapping['mimetypes'][] = $mimetype;
        }
        $key = array_search($mimetype, $this->mapping['mimetypes']);
        $this->mapping['extensions'][$extension] = $key;

        return $this;
    }
   
    public function removeMapping($extension) {
        $extension = strtolower($extension);
        if (isset($this->mapping['extensions'][$extension])) {
            unset($this->mapping['extensions'][$extension]);
            return TRUE;
        }
        return FALSE;
    }
   
    public function removeMimeType($mimetype) {
        if (!in_array($mimetype, $this->mapping['mimetypes'])) {
            return FALSE;
        }
        foreach ($this->getExtensionsForMimeType($mimetype) as $extension) {
            $this->removeMapping($extension);
        }
        $key = array_search($mimetype, $this->mapping['mimetypes']);
        unset($this->mapping['mimetypes'][$key]);
        return TRUE;
    }
}
