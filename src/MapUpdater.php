<?php

namespace FileEye\MimeMap;

use FileEye\MimeMap\Map\AbstractMap;

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
     * Returns the default file with override commands to be executed.
     *
     * The YAML file provides an array of calls to MapHandler methods to be
     * executed sequentially. Each entry indicates the method to be invoked and
     * the arguments to be passed in.
     *
     * @return string
     */
    public static function getDefaultOverrideFile()
    {
        return __DIR__ . '/../resources/apache_overrides.yml';
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
        $map = MapHandler::map('\FileEye\MimeMap\Map\EmptyMap');
dump($map);
return $map;
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
        if (empty($map->getMapArray())) {
            throw new \RuntimeException('No data found in file ' . $source_file);
        }
        return $map;
    }

    /**
     * Applies to the map an array of overrides.
     *
     * @param AbstractMap $map
     *   The map.
     * @param array $overrides
     *   The overrides to be applied.
     *
     * @return void
     */
    public function applyOverrides(AbstractMap $map, array $overrides)
    {
        foreach ($overrides as $command) {
            call_user_func_array([$map, $command[0]], $command[1]);
        }
    }

    /**
     * Updates the map at a destination PHP file.
     *
     * @param AbstractMap $map
     *   The map.
     *
     * @return void
     */
    public function writeMapToPhpClassFile(AbstractMap $map, $file)
    {
        $content = preg_replace(
            '#protected static \$map = (.+?);#s',
            "protected static \$map = " . var_export($map->getMapArray(), true) . ";",
            file_get_contents($file)
        );
        file_put_contents($file, $content);
    }
}
