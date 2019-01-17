<?php

namespace FileEye\MimeMap;

use SebastianBergmann\Comparator\ArrayComparator;
use SebastianBergmann\Comparator\ComparisonFailure;
use SebastianBergmann\Diff\Differ;
use SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;

/**
 * Compiles the MIME type to file extension map.
 */
class MapUpdater
{
    /**
     * Default URL where to read the specification from.
     *
     * The apache httpd project contains the most complete list of file
     * extension to mime type mapping on the planet. We use it to update our
     * own list.
     */
    const DEFAULT_SOURCE_FILE = 'http://svn.apache.org/viewvc/httpd/httpd/trunk/docs/conf/mime.types?view=co';

    /**
     * The default file where to write the map as PHP code.
     */
    const DEFAULT_CODE_FILE_NAME = 'TypeExtensionMap.php';

    public static function getDefaultCodeFilePath()
    {
        return dirname(__FILE__) . '/' . static::DEFAULT_CODE_FILE_NAME;
    }

    /**
     * Creates a new type-to-extension map reading from a file.
     *
     * @param string $source_file
     *   (Optional) the source file. Defaults to the Apache source bind_textdomain_codeset
     *   repository file where MIME types and file extensions are associated.
     *
     * @throws \RuntimeException if file I/O error occurs.
     *
     * @return MapHandler
     *   The map handler with the new map.
     */
    public function createMapFromSourceFile($source_file = MapUpdater::DEFAULT_SOURCE_FILE)
    {
        $map = new MapHandler([]);
        $lines = file($source_file);
        foreach ($lines as $line) {
            if ($line{0} == '#') {
                continue;
            }
            $line = preg_replace("#\\s+#", ' ', trim($line));
            $parts = explode(' ', $line);
            $type = array_shift($parts);
            foreach ($parts as $extension) {
                $map->addMapping($type, $extension);
            }
        }
        if (empty($map->get())) {
            throw new \RuntimeException('No data found in file ' . $source_file);
        }
        return $map;
    }

    /**
     * Compares two type-to-extension maps by section.
     *
     * @param MapHandler $old_map
     *   The first map to compare.
     * @param MapHandler $new_map
     *   The second map to compare.
     * @param string $section
     *   The first-level array key to compare: 'types' or 'extensions'.
     *
     * @throws \RuntimeException with diff details if the maps differ.
     *
     * @return bool
     *   True if the maps are equal.
     */
    public function compareMaps(MapHandler $old_map, MapHandler $new_map, $section)
    {
        $old_map->sort();
        $new_map->sort();
        $old = $old_map->get();
        $new = $new_map->get();

        $comparator = new ArrayComparatory();
        try {
            $comparator->assertEquals($old[$section], $new[$section]);
            return true;
        } catch (ComparisonFailure $failure) {
            $old_string = var_export($old[$section], true);
            $new_string = var_export($new[$section], true);
            $differ = new Differ(new UnifiedDiffOutputBuilder("--- Removed\n+++ Added\n"));
            throw new \RuntimeException($differ->diff($old_string, $new_string));
        }
    }

    public function writeMapToCodeFile($map, $file)
    {
        $new = preg_replace(
            '#public static \$map = (.+?);#s',
            "public static \$map = " . var_export($map, true) . ";",
            file_get_contents($file)
        );
        file_put_contents($file, $new);
    }
}
