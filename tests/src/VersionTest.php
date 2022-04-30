<?php

namespace FileEye\MimeMap\Test;

use FileEye\MimeMap\Version;

class VersionTest extends MimeMapTestBase
{
    public function testGet(): void
    {
        $this->assertNotNull(Version::get());
    }
}
