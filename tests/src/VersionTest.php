<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Version;
use PHPUnit\Framework\TestCase;

class VersionTest extends TestCase
{
    public function testGet()
    {
        $this->assertNotNull(Version::get());
    }
}
