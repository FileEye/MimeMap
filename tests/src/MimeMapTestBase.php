<?php

namespace FileEye\MimeMap\Test;

use FileEye\MimeMap\Extension;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

// In order to manage different method signatures between PHPUnit versions, we
// dynamically load a compatibility trait dependent on the PHPUnit runner
// version.
// phpcs:disable
if (!trait_exists('FileEye\MimeMap\Test\PhpunitCompatibilityTrait', false)) {
    if (class_exists('PHPUnit\Runner\Version') && version_compare(Version::id(), '8.0.0', '>=')) {
        class_alias('FileEye\MimeMap\Test\Phpunit8CompatibilityTrait', 'FileEye\MimeMap\Test\PhpunitCompatibilityTrait');
    } elseif (class_exists('PHPUnit\Runner\Version') && version_compare(Version::id(), '7.0.0', '>=')) {
        class_alias('FileEye\MimeMap\Test\Phpunit7CompatibilityTrait', 'FileEye\MimeMap\Test\PhpunitCompatibilityTrait');
    } else {
        class_alias('FileEye\MimeMap\Test\Phpunit4CompatibilityTrait', 'FileEye\MimeMap\Test\PhpunitCompatibilityTrait');
    }
}
// phpcs:enable

class MimeMapTestBase extends TestCase
{
    use PhpunitCompatibilityTrait;
}
