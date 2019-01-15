<?php

namespace FileEye\MimeMap;

/**
 * Class for mapping file extensions to MIME types.
 */
class Extension
{
    /**
     * Returns a file extension's MIME type.
     *
     * @param string $extension File extension to get the type of.
     *
     * @return string Extension's MIME type on success.
     */
    public function getDefaultType($extension)
    {
        $map = new MapHandler();
        $extension = strtolower($extension);
        if (!isset($map->get()['extensions'][$extension])) {
            throw new \RuntimeException("Sorry, couldn't determine file type.");
        }
        return $map->get()['extensions'][$extension][0];
    }
}
