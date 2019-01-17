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
        $this->fileSystem->copy(__DIR__ . '/../../src/Tests/MiniMap.php.test', __DIR__ . '/../../src/Tests/MiniMap.php');
        MapHandler::setDefaultMapClass('\FileEye\MimeMap\Tests\MiniMap');
        $map_a = new MapHandler();
        $this->assertNotContains('text/plain', file_get_contents($map_a->getMapFileName()));
        $map_b = $this->updater->createMapFromSourceFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $this->updater->applyOverrides($map_b, [['addMapping'], ['bing/bong', 'binbon']]);
        $this->updater->writeMapToCodeFile($map_b, $map_a->getMapFileName());
        $content = file_get_contents($map_a->getMapFileName());
        $this->assertContains('text/plain', $content);
        $this->assertContains('bing/bong', $content);
        $this->assertContains('binbon', $content);
        $map_a = null;
        $map_b = null;
        $this->fileSystem->remove(__DIR__ . '/../../src/Tests/MiniMap.php');
    }
}
