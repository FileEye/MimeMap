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
    protected $updater;
    protected $fileSystem;

    public function setUp()
    {
        $this->updater = new MapUpdater();
        $this->fileSystem = new Filesystem();
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
        $this->assertSame(['image/jpeg', 'text/plain'], $map->listTypes());
        $this->assertSame(['jpeg', 'jpg', 'jpe', 'txt'], $map->listExtensions());
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

    public function testWriteMapToPhpClassFile()
    {
        $this->fileSystem->copy(__DIR__ . '/../../src/Map/MiniMap.php.test', __DIR__ . '/../../src/Map/MiniMap.php');
        MapHandler::setDefaultMapClass('\FileEye\MimeMap\Map\MiniMap');
        $map_a = MapHandler::map();
        $content = file_get_contents($map_a->getMapFileName());
        $this->assertNotContains('text/plain', $content);
        $map_b = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $this->updater->applyOverrides($map_b, [['addMapping', ['bing/bong', 'binbon']]]);
        $this->updater->writeMapToPhpClassFile($map_b, $map_a->getMapFileName());
        $content = file_get_contents($map_a->getMapFileName());
        $this->assertContains('text/plain', $content);
        $this->assertContains('bing/bong', $content);
        $this->assertContains('binbon', $content);
        $this->fileSystem->remove(__DIR__ . '/../../src/Map/MiniMap.php');
    }

    public function testGetDefaultOverrideFile()
    {
        $this->assertContains('overrides.yml', MapUpdater::getDefaultOverrideFile());
    }
}
