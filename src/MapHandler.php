<?php

namespace FileEye\MimeMap;

/**
 * Class for managing map singletons.
 */
abstract class MapHandler
{
    /**
     * The default map PHP class.
     */
    const DEFAULT_MAP_CLASS = '\FileEye\MimeMap\Map\DefaultMap';

    /**
     * The default map class to use.
     *
     * It can be overridden by ::setDefaultMapClass.
     *
     * @var string
     */
    protected static $defaultMapClass = MapHandler::DEFAULT_MAP_CLASS;

    /**
     * Sets a map class as default for new instances.
     *
     * @param string $map_class A FQCN.
     */
    public static function setDefaultMapClass($map_class)
    {
        static::$defaultMapClass = $map_class;
    }

    /**
     * Returns the map instance.
     *
     * @param string $map_class
     *   (Optional) The map FQCN to be used. If null, the default map will be
     *   used.
     *
     * @return Map\AbstractMap
     */
    public static function map($map_class = null)
    {
        if ($map_class === null) {
            $map_class = static::$defaultMapClass;
        }
        return $map_class::getInstance();
    }
}
