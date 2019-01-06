<?php

namespace FileEye\MimeMap;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Yaml\Yaml;

/**
 * Compiles the MIME type to file extension map.
 */
class MapCompiler
{
    /**
     * Default directory where to read the specification files from.
     */
    const DEFAULT_SPEC_PATH = '/../../../spec';

    /**
     * Default directory where to write compiled classes.
     */
    const DEFAULT_MAPCLASS_PATH = '/../../CollectionMap';

    /**
     * Identifier for void collection.
     */
    const VOID_COLLECTION = '__NIL__';

    /**
     * Map of expected collection level array keys.
     */
    private $collectionKeys = ['name', 'title', 'items'];

    /** @var Filesystem */
    private $fs;

    /** @var Finder */
    private $finder;

    /**
     * The compiled ExifEye specification map.
     *
     * @var array
     */
    private $map = [];

    /**
     * ExifEye supported primitive data formats.
     *
     * @var array
     */
    private $formats = [];

    /**
     * Constructs a SpecCompiler object.
     *
     * @param Finder $finder
     * @param Filesystem $fs
     */
    public function __construct(Finder $finder = null, Filesystem $fs = null)
    {
        $this->finder = $finder ? $finder : new Finder();
        $this->fs = $fs ? $fs : new Filesystem();
    }

    /**
     * Compiles a set of ExifEye specification YAML files.
     *
     * @param string $yamlDirectory
     *            the directory containing a set of .yaml specification files.
     * @param string $resourcesDirectory
     *            the directory where the compiled PHP specification file will
     *            be stored.
     */
    public function compile($yamlDirectory = null, $resourcesDirectory = null, $namespace = null)
    {
        $yamlDirectory = $yamlDirectory ?: __DIR__ . static::DEFAULT_SPEC_PATH;
        $resourcesDirectory = $resourcesDirectory ?: __DIR__ . static::DEFAULT_MAPCLASS_PATH;
        $namespace = $namespace ?: Collection::DEFAULT_MAP_NAMESPACE;

        // Get formats.
        $formats_yaml = Yaml::parse(file_get_contents($yamlDirectory . DIRECTORY_SEPARATOR . 'format.yaml'));
        foreach ($formats_yaml['items'] as $id => $item) {
            $this->formats[$item['name']] = $id;
        }

        // Process the files. Each file corresponds to a collection.
        $files = $this->finder->files()->in($yamlDirectory)->name('*.yaml');
        foreach ($files as $file) {
            $collection = Yaml::parse($file->getContents());
            $this->mapCollection($collection, $file);
        }

        // Dump the data to the mapper class file.
        $data = <<<DATA
<?php
namespace $namespace;

/**
 * This file is generated automatically by executing the 'exifeye compile' command.
 *
 * DO NOT CHANGE MANUALLY.
 */
// phpcs:disable
abstract class Core {
  public static \$map =
DATA;
        $data .= ' ';
        $data .= preg_replace('/\s+$/m', '', var_export($this->map, true)) . ';';
        $data .= <<<DATA
}
DATA;
        $this->fs->dumpFile($resourcesDirectory . '/Core.php', $data);
    }

    /**
     * Processes a 'collection' into the compiled map.
     *
     * @param array $input
     *            the array from the specification file.
     * @param SplFileInfo $file
     *            the YAML specification file being processed.
     */
    protected function mapCollection(array $input, SplFileInfo $file)
    {
        // Check validity of collection keys.
        $diff = array_diff($this->collectionKeys, array_intersect(array_keys($input), $this->collectionKeys));
        if (!empty($diff)) {
            throw new SpecCompilerException($file->getFileName() . ": missing collection key(s) - " . implode(", ", $diff));
        }

        // 'collections' entry.
        $tmp = $input;
        unset($tmp['collection'], $tmp['items']);
        $this->map['collections'][$input['collection']] = $tmp;

        // 'collectionsByName' entry.
        $this->map['collectionsByName'][$input['name']] = $input['collection'];
        if (!empty($input['alias'])) {
            foreach ($input['alias'] as $alias) {
                $this->map['collectionsByName'][$alias] = $input['collection'];
            }
        }

        // 'items' entry.
        foreach ($input['items'] as $id => $item) {
            // Item must have a collection.
            if (!isset($item['collection'])) {
                $item['collection'] = static::VOID_COLLECTION;
            }

            // Convert format string to its ID.
            if (isset($item['format'])) {
                $temp = [];
                if (is_scalar($item['format'])) {
                    $temp[] = $item['format'];
                } else {
                    $temp = $item['format'];
                }
                $formats = [];
                foreach ($temp as $name) {
                    if (!isset($this->formats[$name])) {
                        throw new SpecCompilerException($file->getFileName() . ": invalid '" . $name . "' format found for item '" . $item['name'] . "'");
                    }
                    $formats[] = $this->formats[$name];
                }
                $item['format'] = $formats;
            }

            // Add item to map by collection/id.
            $this->map['items'][$input['collection']][$id] = $item;

            // Add item to map by collection/name.
            if (isset($item['name'])) { // xx
                $this->map['itemsByName'][$input['collection']][$item['name']] = $id;
            }
        }
    }
}
