<?php

namespace FileEye\MimeMap\Map;

/**
 * Interface for maps.
 */
interface MapInterface
{
    /**
     * Constructor.
     */
    public function __construct();

    /**
     * Returns the singleton.
     */
    public static function getInstance(): MapInterface;

    /**
     * Returns the map's class fully qualified filename.
     */
    public function getFileName(): string;

    /**
     * Gets the map array.
     *
     * @return array<string,array<string,array<string,mixed>>>
     */
    public function getMapArray(): array;

    /**
     * Sorts the map.
     */
    public function sort(): MapInterface;

    /**
     * Backs up the map array.
     */
    public function backup(): void;

    /**
     * Resets the map array to the backup.
     */
    public function reset(): void;
}
