<?php

namespace FileEye\MimeMap;

/**
 * Class for managing the type-to-extension map.
 */
class MapHandler
{
    /**
     * The default map PHP class.
     */
    const DEFAULT_MAP_CLASS = '\FileEye\MimeMap\TypeExtensionMap';

    /**
     * The map class to use.
     *
     * It's static so it can be overridden by ::setDefaultMapClass and any new
     * instance take the overriden setting.
     *
     * @var string
     */
    protected static $mapClass = MapHandler::DEFAULT_MAP_CLASS;

    /**
     * Sets a map class as default for new instances.
     *
     * @param string $class A FQCN.
     */
    public static function setDefaultMapClass($class)
    {
        static::$mapClass = $class;
    }

    /**
     * Constructor.
     *
     * @param array $map
     *   (Optional) The mapping to be used for this instance. If null, the
     *   default map will be used.
     */
    public function __construct(array $map = null)
    {
//        if (is_null($map)) {
//            $map_class = static::$mapClass;
//            $this->map = &$map_class::$map;
//        } else {
//            $this->map = $map;
//        }
    }

    /**
     * Returns the map.
     *
     * @return string
     */
    public function getMap()
    {
        return new static::$mapClass();
    }
}
