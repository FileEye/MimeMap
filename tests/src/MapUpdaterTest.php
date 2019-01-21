<?php

namespace FileEye\MimeMap\test;

use Symfony\Component\Filesystem\Filesystem;
use FileEye\MimeMap\MapHandler;
use FileEye\MimeMap\MapUpdater;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \FileEye\MimeMap\MapUpdater
 * @backupStaticAttributes enabled
 */
class MapUpdaterTest extends TestCase
{
    protected $newMap;
    protected $updater;
    protected $fileSystem;

    public function setUp()
    {
        $this->newMap = MapHandler::map('\FileEye\MimeMap\Map\EmptyMap');
        $this->assertInstanceOf('\FileEye\MimeMap\Map\EmptyMap', $this->newMap);
        $this->updater = new MapUpdater($this->newMap);
        $this->fileSystem = new Filesystem();
    }

    public function tearDown()
    {
        $this->assertInstanceOf('\FileEye\MimeMap\Map\EmptyMap', $this->newMap);
        $this->newMap->reset();
    }

    public function testLoadMapFromApacheFile()
    {
        $this->updater->loadMapFromApacheFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
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
        $this->assertSame($expected, $this->newMap->getMapArray());
        $this->assertSame(['image/jpeg', 'text/plain'], $this->newMap->listTypes());
        $this->assertSame(['jpeg', 'jpg', 'jpe', 'txt'], $this->newMap->listExtensions());
    }

    public function testLoadMapFromApacheFileZeroLines()
    {
        $this->updater->loadMapFromApacheFile(dirname(__FILE__) . '/../fixtures/zero.mime-types.txt');
        $this->assertSame([], $this->newMap->getMapArray());
    }

    public function testLoadMapFromFreedesktopFile()
    {
        $this->updater->loadMapFromFreedesktopFile(dirname(__FILE__) . '/../fixtures/min.freedesktop.xml');
        $expected = [
            'types' => [
                'application/x-atari-2600-rom' => ['a26'],
                'text/plain' => ['txt', 'asc'],
            ],
            'extensions' => [
                'a26' => ['application/x-atari-2600-rom'],
                'asc' => ['text/plain'],
                'txt' => ['text/plain'],
            ],
        ];
        $this->assertSame($expected, $this->newMap->getMapArray());
        $this->assertSame(['application/x-atari-2600-rom', 'text/plain'], $this->newMap->listTypes());
        $this->assertSame(['a26', 'asc', 'txt'], $this->newMap->listExtensions());
    }

    public function testLoadMapFromApacheFileZeroLines()
    {
        $this->updater->loadMapFromFreedesktopFile(dirname(__FILE__) . '/../fixtures/zero.freedesktop.xml');
        $this->assertSame([], $this->newMap->getMapArray());
    }

    /**
     * @expectedException \LogicException
     */
    public function testEmptyMapNotWriteable()
    {
        $this->assertNull($this->newMap->getFileName());
    }

    public function testWriteMapToPhpClassFile()
    {
        $this->fileSystem->copy(__DIR__ . '/../../src/Map/MiniMap.php.test', __DIR__ . '/../../src/Map/MiniMap.php');
        MapHandler::setDefaultMapClass('\FileEye\MimeMap\Map\MiniMap');
        $map_a = MapHandler::map();
        $this->assertContains('src/Map/MiniMap.php', $map_a->getFileName());
        $content = file_get_contents($map_a->getFileName());
        $this->assertNotContains('text/plain', $content);
        $this->updater->loadMapFromApacheFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $this->updater->applyOverrides([['addMapping', ['bing/bong', 'binbon']]]);
        $this->updater->writeMapToPhpClassFile($map_a->getFileName());
        $content = file_get_contents($map_a->getFileName());
        $this->assertContains('text/plain', $content);
        $this->assertContains('bing/bong', $content);
        $this->assertContains('binbon', $content);
        $this->fileSystem->remove(__DIR__ . '/../../src/Map/MiniMap.php');
    }

    public function testGetDefaultMapBuildFile()
    {
        $this->assertContains('default_map_build.yml', MapUpdater::getDefaultMapBuildFile());
    }
}
