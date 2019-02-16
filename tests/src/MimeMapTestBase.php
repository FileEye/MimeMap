<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Extension;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

// In order to manage different method signatures between PHPUnit versions, we
// dynamically load a compatibility trait dependent on the PHPUnit runner
// version.
// phpcs:disable
if (!trait_exists('FileEye\MimeMap\test\PhpunitCompatibilityTrait', false)) {
  if (class_exists('PHPUnit\Runner\Version') && version_compare(Version::id(), '8.0.0', '>=')) {
    class_alias('FileEye\MimeMap\test\Phpunit8CompatibilityTrait', 'FileEye\MimeMap\test\PhpunitCompatibilityTrait');
  } else {
    class_alias('FileEye\MimeMap\test\Phpunit4CompatibilityTrait', 'FileEye\MimeMap\test\PhpunitCompatibilityTrait');
  }
}
// phpcs:enable

class MapUpdaterTest extends MimeMapTestBase
{
    use PhpunitCompatibilityTrait;
}
