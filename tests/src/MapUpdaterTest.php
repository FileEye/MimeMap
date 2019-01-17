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
        $expected = [
            'types' => [
                'image/jpeg' => ['jpeg', 'jpg', 'jpe'],
                'text/plain' => ['txt'],
            ],
            'extensions' => [
                'jpeg' => ['image/jpeg'],
                'jpg' => ['image/jpeg'],
                'jpe' => ['image/jpeg'],
                'txt' => ['text/plain'],
            ],
        ];
        $this->assertSame($expected, $map->get());
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCreateMapFromSourceFileError()
    {
      $map = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/missing-file');
      $this->assertNull($map->get());
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCreateMapFromSourceFileZeroLines()
    {
      $map = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/zero.mime-types.txt');
      $this->assertNull($map->get());
    }
}
