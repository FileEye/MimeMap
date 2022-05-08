<?php declare(strict_types=1);

namespace FileEye\MimeMap;

use Composer\InstalledVersions;

/**
 * MimeMap version.
 */
class Version
{
    /**
     * Returns the current version of MimeMap.
     */
    public static function get(): string
    {
        if ($version = InstalledVersions::getPrettyVersion('fileeye/mimemap')) {
            return $version;
        }
        throw new \RuntimeException("MimeMap could not determine its own version from Composer");
    }
}
