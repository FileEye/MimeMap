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
     * The MIME types map.
     *
     * @var Map\AbstractMap
     */
    protected $map;

    /**
     * Constructor.
     *
     * @param string $extension
     *   A file extension.
     * @param string $map_class
     *   (Optional) The FQCN of the map class to use.
     */
    public function __construct($extension, $map_class = null)
    {
        $this->extension = strtolower($extension);
        $this->map = MapHandler::map($map_class);
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
        $types = $this->map->getExtensionTypes($this->extension);
        if (empty($types)) {
            if ($strict) {
                throw new MappingException('No MIME type mapped to extension ' . $this->extension);
            } else {
                return ['application/octet-stream'];
            }
        }
        return $types;
    }
}
