<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\MapUpdater;
use PHPUnit\Framework\TestCase;

/**
 * @backupStaticAttributes enabled
 */
class MapUpdaterTest extends TestCase
{
    protected $updater;

    public function setUp()
    {
        $this->updater = new MapUpdater();
    }

    public function testCreateMapFromSourceFile()
    {
        $map = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $this->assertSame(['aaa/aaa'], $map->get());
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCreateMapFromSourceFileError()
    {
      $map = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/missing-file');
      $this->assertNull($map->get());
    }
}
