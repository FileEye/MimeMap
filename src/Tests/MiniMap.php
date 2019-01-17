<?php

namespace FileEye\MimeMap\Tests;

/**
 * Class for mapping file extensions to MIME types.
 */
class MiniMap
{
    /**
     * Returns this file's full qualified filename.
     *
     * @return $string
     */
    public static getFileName() {
        return __FILE__;
    }

    /**
     * Mapping between file extensions and MIME types.
     *
     * The array has two main keys, 'types' that maps MIME types to file
     * extensions, and 'extensions' that map file extensions to MIME types.
     *
     * The entire map is created automatically by running
     *  $ fileye-mimemap update [URL] [YAML] [FILE]
     * on the command line.
     * The utility application fetches the map from the Apache HTTPD
     * documentation website, and integrates its definitions with any further
     * specifications contained in the YAML file.
     *
     * DO NOT CHANGE THE MAPPING ARRAY MANUALLY.
     *
     * @internal
     *
     * @var array
     */
    // phpcs:disable
    public static $map = array (
  'types' =>
  array (
    'application/andrew-inset' =>
    array (
      0 => 'ez',
    ),
  ),
  'extensions' =>
  array (
    'ez' =>
    array (
      0 => 'application/andrew-inset',
    ),
  ),
);
    // phpcs:enable
}
