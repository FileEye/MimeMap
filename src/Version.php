<?php

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
        return InstalledVersions::getPrettyVersion('fileeye/mimemap');
    }
}
