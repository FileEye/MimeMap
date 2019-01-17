<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Extension;
use FileEye\MimeMap\MapHandler;
use FileEye\MimeMap\MapUpdater;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \FileEye\MimeMap\MapUpdater
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
    public function testCreateMapFromSourceFileZeroLines()
    {
        $map = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/zero.mime-types.txt');
        $this->assertNull($map->get());
    }

    public function testCompareMapsEqual()
    {
        $map_a = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $map_b = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $this->assertTrue($this->updater->compareMaps($map_a, $map_b, 'types'));
        $this->assertTrue($this->updater->compareMaps($map_a, $map_b, 'extensions'));
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCompareMapsNotEqual()
    {
        $map_a = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $map_b = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/some.mime-types.txt');
        $this->updater->compareMaps($map_a, $map_b, 'types');
    }

    public function testWriteMapToCodeFile()
    {
        MapHandler::setDefaultMapClass('\FileEye\MimeMap\Tests\MiniMap');
        $this->assertSame('application/octet-stream', (new Extension('txt'))->getDefaultType(false));
        $map_a = new MapHandler();
        $map_b = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $this->updater->writeMapToCodeFile($map_b, $map_a->getMapFileName());
        opcache_reset();
        apc_clear_cache();
        apcu_clear_cache();
        $this->assertSame('text/plain', (new Extension('txt'))->getDefaultType());
    }
}
