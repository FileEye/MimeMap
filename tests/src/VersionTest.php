<?php

namespace FileEye\MimeMap\Test;

use FileEye\MimeMap\Version;

class VersionTest extends MimeMapTestBase
{
    public function testGet()
    {
        $this->assertNotNull(Version::get());
    }
}
