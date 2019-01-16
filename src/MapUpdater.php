<?php

namespace FileEye\MimeMap;

use SebastianBergmann\Comparator\Factory;
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
    const DEFAULT_URL = 'http://svn.apache.org/viewvc/httpd/httpd/trunk/docs/conf/mime.types?view=co';

    /**
     * The defualt file where to write the map as PHP code.
     */
    const DEFAULT_CODE_FILE_NAME = 'TypeExtensionMap.php';

    public static function getDefaultCodeFilePath()
    {
        return dirname(__FILE__) . '/' . static::DEFAULT_CODE_FILE_NAME;
    }

    public function loadMapFromUrl($url = MapUpdater::DEFAULT_URL)
    {
        $map = [];
        $lines = file($url);
        if ($lines === false) {
            throw new \RuntimeException('Error loading URL: ' . $url);
        }
        foreach ($lines as $line) {
            if ($line{0} == '#') {
                continue;
            }
            $line = preg_replace("#\\s+#", ' ', trim($line));
            $parts = explode(' ', $line);
            $type = array_shift($parts);
            $extensions = $parts;
            foreach ($extensions as $ext) {
                $map['types'][$type][] = $ext;
                $map['extensions'][$ext][] = $type;
            }
        }
        return $map;
    }

    public function compareMaps(array $current_map, array $new_map, $key)
    {
        $factory = new Factory;
        $comparator = $factory->getComparatorFor($current_map[$key], $new_map[$key]);
        try {
            $comparator->assertEquals($current_map[$key], $new_map[$key]);
            return true;
        } catch (ComparisonFailure $failure) {
            $current_map_string = var_export($current_map[$key], true);
            $new_map_string = var_export($new_map[$key], true);
            $differ = new Differ(new UnifiedDiffOutputBuilder("--- Removed\n+++ Added\n"));
            throw new \RuntimeException($differ->diff($current_map_string, $new_map_string));
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
