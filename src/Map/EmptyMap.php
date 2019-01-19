<?php

namespace FileEye\MimeMap\Map;

/**
 * Class for mapping file extensions to MIME types.
 *
 * This class has no mapping defined. It can be used for feeding updates and
 * for testing purposes.
 */
class EmptyMap extends AbstractMap
{
    /**
     * Mapping between file extensions and MIME types.
     *
     * Intentionally left blank.
     *
     * @internal
     *
     * @var array
     */
    protected static $map = [];
}
