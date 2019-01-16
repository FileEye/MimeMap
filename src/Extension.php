<?php

namespace FileEye\MimeMap;

/**
 * Class for mapping file extensions to MIME types.
 */
class Extension
{
    /**
     * The file extension.
     *
     * @var string
     */
    protected $extension;

    /**
     * Constructor.
     *
     * @param string $extension A file extension.
     */
    public function __construct($extension)
    {
        $this->extension = $extension;
    }

    /**
     * Returns the file extension's preferred MIME type.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns 'application/octet-stream' as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     *
     * @return string
     */
    public function getDefaultType($strict = true)
    {
        return $this->getTypes($strict)[0];
    }

    /**
     * Returns all the MIME types related to the file extension.
     *
     * @param bool $strict
     *   (Optional) if true a MappingException is thrown when no mapping is
     *   found, if false it returns ['application/octet-stream'] as a default.
     *   Defaults to true.
     *
     * @throws MappingException if no mapping found and $strict is true.
     *
     * @return string[]
     */
    public function getTypes($strict = true)
    {
        $map = new MapHandler();
        $extension = strtolower($this->extension);
        if (!isset($map->get()['extensions'][$this->extension])) {
            if ($strict) {
                throw new MappingException('No MIME type mapped to extension ' . $this->extension);
            } else {
                return ['application/octet-stream'];
            }
        }
        return $map->get()['extensions'][$this->extension];
    }
}
