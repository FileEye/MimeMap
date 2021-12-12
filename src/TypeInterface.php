<?php

namespace FileEye\MimeMap;

/**
 * Interface for Type objects.
 */
interface TypeInterface
{
    /**
     * Constructor.
     *
     * The type string will be parsed and the appropriate class vars set.
     *
     * @param string $type_string
     *   (Optional) MIME type string to be parsed.
     * @param string $map_class
     *   (Optional) The FQCN of the map class to use.
     */
    public function __construct($type_string = null, $map_class = null);
}
