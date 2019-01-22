<?php

namespace FileEye\MimeMap;

use FileEye\MimeMap\Map\AbstractMap;

/**
 * Compiles the MIME type to file extension map.
 */
class MapUpdater
{
    /**
     * The AbstractMap object to update.
     *
     * @var AbstractMap
     */
    protected $map;

    /**
     * Returns the default file with override commands to be executed.
     *
     * The YAML file provides an array of calls to MapHandler methods to be
     * executed sequentially. Each entry indicates the method to be invoked and
     * the arguments to be passed in.
     *
     * @return string
     */
    public static function getDefaultMapBuildFile()
    {
        return __DIR__ . '/../resources/default_map_build.yml';
    }

    /**
     * Constructor.
     *
     * @param AbstractMap $map
     *   The map.
     */
    public function __construct(AbstractMap $map)
    {
        $this->map = $map;
    }

    /**
     * Loads a new type-to-extension map reading from a file in Apache format.
     *
     * @param string $source_file
     *   The source file. The file must conform to the format in the Apache
     *   source code repository file where MIME types and file extensions are
     *   associated.
     *
     * @throws \RuntimeException if file I/O error occurs.
     *
     * @return $this
     */
    public function loadMapFromApacheFile($source_file)
    {
        $lines = file($source_file);
        foreach ($lines as $line) {
            if ($line{0} == '#') {
                continue;
            }
            $line = preg_replace("#\\s+#", ' ', trim($line));
            $parts = explode(' ', $line);
            $type = array_shift($parts);
            foreach ($parts as $extension) {
                $this->map->addMapping($type, $extension);
            }
        }
        $this->map->sort();
        return $this;
    }

    /**
     * Loads a new type-to-extension map reading from a Freedesktop.org file.
     *
     * @param string $source_file
     *   The source file. The file must conform to the format in the
     *   Freedesktop.org database.
     *
     * @throws \RuntimeException if file I/O error occurs.
     *
     * @return $this
     */
    public function loadMapFromFreedesktopFile($source_file)
    {
        $xml = simplexml_load_string(file_get_contents($source_file));
        $aliasx = [];
        foreach ($xml as $node) {
            $exts = [];
            foreach ($node->glob as $glob) {
                $pattern = (string) $glob['pattern'];
                if ('*' != $pattern[0] || '.' != $pattern[1]) {
                    continue;
                }
                $exts[] = substr($pattern, 2);
            }
            if (empty($exts)) {
                continue;
            }

            $type = (string) $node['type'];

            // Add description.
            if (isset($node->comment)) {
                $this->map->addTypeDescription($type, (string) $node->comment[0]);
            }
            if (isset($node->acronym)) {
                $this->map->addTypeDescription($type, (string) $node->acronym);
            }
/*            if (isset($node->expanded-acronym)) {
                $this->map->addTypeDescription($type, (string) $node->expanded-acronym);
            }*/

            // Add extensions.
            foreach ($exts as $ext) {
                $this->map->addMapping($type, $ext);
            }

            foreach ($node->alias as $alias) {
                $al = strtolower((string) $alias['type']);
                $aliasx[$type][] = $al;
            }
        }
        //dump($aliasx);
        $this->map->sort();
        return $this;
    }

    /**
     * Applies to the map an array of overrides.
     *
     * @param array $overrides
     *   The overrides to be applied.
     *
     * @return $this
     */
    public function applyOverrides(array $overrides)
    {
        foreach ($overrides as $command) {
            call_user_func_array([$this->map, $command[0]], $command[1]);
        }
        return $this;
    }

    /**
     * Updates the map at a destination PHP file.
     *
     * @return $this
     */
    public function writeMapToPhpClassFile($file)
    {
        $content = preg_replace(
            '#protected static \$map = (.+?);#s',
            "protected static \$map = " . var_export($this->map->getMapArray(), true) . ";",
            file_get_contents($file)
        );
        file_put_contents($file, $content);
        return $this;
    }
}
