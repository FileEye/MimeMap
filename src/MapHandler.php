<?php declare(strict_types=1);

namespace FileEye\MimeMap;

use FileEye\MimeMap\Map\DefaultMap;
use FileEye\MimeMap\Map\MimeMapInterface;

/**
 * Class for managing map singletons.
 */
abstract class MapHandler
{
    /**
     * The default map PHP class.
     */
    const DEFAULT_MAP_CLASS = DefaultMap::class;

    /**
     * The default map class to use.
     *
     * It can be overridden by ::setDefaultMapClass.
     *
     * @var string
     */
    protected static $defaultMapClass = self::DEFAULT_MAP_CLASS;

    /**
     * Sets a map class as default for new instances.
     *
     * @param string $map_class A FQCN.
     */
    public static function setDefaultMapClass(string $map_class): void
    {
        static::$defaultMapClass = $map_class;
    }

    /**
     * Returns the map instance.
     *
     * @param string|null $map_class
     *   (Optional) The map FQCN to be used. If null, the default map will be
     *   used.
     */
    public static function map(string $map_class = null): MimeMapInterface
    {
        if ($map_class === null) {
            $map_class = static::$defaultMapClass;
        }
        return $map_class::getInstance();
    }
}
