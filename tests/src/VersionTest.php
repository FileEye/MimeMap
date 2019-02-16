<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Version;

class VersionTest extends MimeMapTestBase
{
    public function testGet()
    {
        $this->assertNotNull(Version::get());
    }
}
