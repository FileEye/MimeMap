<?php declare(strict_types=1);

namespace FileEye\MimeMap;

use FileEye\MimeMap\Map\EmptyMap;
use FileEye\MimeMap\Map\MimeMapInterface;

/**
 * Compiles the MIME type to file extension map.
 */
class MapUpdater
{
    /**
     * The default, empty, base map to use for update.
     */
    const DEFAULT_BASE_MAP_CLASS = EmptyMap::class;

    /**
     * The map object to update.
     */
    protected MimeMapInterface $map;

    /**
     * Returns the default file with override commands to be executed.
     *
     * The YAML file provides an array of calls to MapHandler methods to be
     * executed sequentially. Each entry indicates the method to be invoked and
     * the arguments to be passed in.
     */
    public static function getDefaultMapBuildFile(): string
    {
        return __DIR__ . '/../resources/default_map_build.yml';
    }

    /**
     * Returns the map object being updated.
     */
    public function getMap(): MimeMapInterface
    {
        return $this->map;
    }

    /**
     * Sets the map object to update.
     *
     * @param class-string<MimeMapInterface> $mapClass
     *   The FQCN of the map to be updated.
     */
    public function selectBaseMap(string $mapClass): MapUpdater
    {
        $this->map = MapHandler::map($mapClass);
        $this->map->backup();
        return $this;
    }

    /**
     * Loads a new type-to-extension map reading from a file in Apache format.
     *
     * @param string $source_file
     *   The source file. The file must conform to the format in the Apache
     *   source code repository file where MIME types and file extensions are
     *   associated.
     *
     * @return list<string>
     *   A list of error messages.
     *
     * @throws \RuntimeException
     *   If it was not possible to access the file.
     */
    public function loadMapFromApacheFile(string $source_file): array
    {
        $errors = [];

        $lines = @file($source_file);
        if ($lines == false) {
            $errors[] = "Failed accessing {$source_file}";
            return $errors;
        }
        $i = 1;
        foreach ($lines as $line) {
            if ($line[0] == '#') {
                $i++;
                continue;
            }
            $line = preg_replace("#\\s+#", ' ', trim($line));
            if (is_string($line)) {
                $parts = explode(' ', $line);
                $type = array_shift($parts);
                foreach ($parts as $extension) {
                    $this->map->addTypeExtensionMapping($type, $extension);
                }
            } else {
                $errors[] = "Error processing line $i";
            }
            $i++;
        }
        $this->map->sort();

        return $errors;
    }

    /**
     * Loads a new type-to-extension map reading from a Freedesktop.org file.
     *
     * @param string $source_file
     *   The source file. The file must conform to the format in the
     *   Freedesktop.org database.
     *
     * @return list<string>
     *   A list of error messages.
     */
    public function loadMapFromFreedesktopFile(string $source_file): array
    {
        $errors = [];

        $contents = @file_get_contents($source_file);
        if ($contents == false) {
            $errors[] = 'Failed loading file ' . $source_file;
            return $errors;
        }

        $xml = @simplexml_load_string($contents);
        if ($xml == false) {
            $errors[] = 'Malformed XML in file ' . $source_file;
            return $errors;
        }

        $aliases = [];

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
                $acronym = (string) $node->acronym;
                $expandedAcronym = $node->{'expanded-acronym'} ?? NULL;
                if (isset($expandedAcronym)) {
                    $acronym .= ': ' . $expandedAcronym;
                }
                $this->map->addTypeDescription($type, $acronym);
            }

            // Add extensions.
            foreach ($exts as $ext) {
                $this->map->addTypeExtensionMapping($type, $ext);
            }

            // All aliases are accumulated and processed at the end of the
            // cycle to allow proper consistency checking on the completely
            // developed list of types.
            foreach ($node->alias as $alias) {
                $aliases[$type][] = (string) $alias['type'];
            }
        }

        // Add all the aliases, provide logging of errors.
        foreach ($aliases as $type => $a) {
            foreach ($a as $alias) {
                try {
                    $this->map->addTypeAlias($type, $alias);
                } catch (MappingException $e) {
                    $errors[] = $e->getMessage();
                }
            }
        }
        $this->map->sort();

        return $errors;
    }

    /**
     * Applies to the map an array of overrides.
     *
     * @param array<int,array{0: string, 1: array<string>}> $overrides
     *   The overrides to be applied.
     *
     * @return list<string>
     *   A list of error messages.
     */
    public function applyOverrides(array $overrides): array
    {
        $errors = [];

        foreach ($overrides as $command) {
            try {
                $callable = [$this->map, $command[0]];
                assert(is_callable($callable));
                call_user_func_array($callable, $command[1]);
            } catch (MappingException $e) {
                $errors[] = $e->getMessage();
            }
        }
        $this->map->sort();

        return $errors;
    }

    /**
     * Updates the map at a destination PHP file.
     */
    public function writeMapToPhpClassFile(string $destinationFile): MapUpdater
    {
        $content = @file_get_contents($destinationFile);
        if ($content == false) {
            throw new \RuntimeException('Failed loading file ' . $destinationFile);
        }

        $newContent = preg_replace(
            '#protected static \$map = (.+?);#s',
            "protected static \$map = " . preg_replace('/\s+$/m', '', var_export($this->map->getMapArray(), true)) . ";",
            $content
        );
        file_put_contents($destinationFile, $newContent);

        return $this;
    }
}
