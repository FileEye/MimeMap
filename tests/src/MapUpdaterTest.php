<?php

namespace FileEye\MimeMap\Test;

use Symfony\Component\Filesystem\Filesystem;
use FileEye\MimeMap\MapHandler;
use FileEye\MimeMap\MapUpdater;

/**
 * @coversDefaultClass \FileEye\MimeMap\MapUpdater
 * @backupStaticAttributes enabled
 */
class MapUpdaterTest extends MimeMapTestBase
{
    protected $newMap;
    protected $updater;
    protected $fileSystem;

    public function fcSetUp()
    {
        $this->updater = new MapUpdater();
        $this->updater->selectBaseMap(MapUpdater::DEFAULT_BASE_MAP_CLASS);
        $this->newMap = $this->updater->getMap();
        $this->assertInstanceOf(MapUpdater::DEFAULT_BASE_MAP_CLASS, $this->newMap);
        $this->fileSystem = new Filesystem();
    }

    public function fcTearDown()
    {
        $this->assertInstanceOf(MapUpdater::DEFAULT_BASE_MAP_CLASS, $this->newMap);
        $this->newMap->reset();
    }

    public function testLoadMapFromApacheFile()
    {
        $this->updater->loadMapFromApacheFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $expected = [
            't' => [
                'image/jpeg' => ['e' => ['jpeg', 'jpg', 'jpe']],
                'text/plain' => ['e' => ['txt']],
            ],
            'e' => [
                'jpe' => ['t' => ['image/jpeg']],
                'jpeg' => ['t' => ['image/jpeg']],
                'jpg' => ['t' => ['image/jpeg']],
                'txt' => ['t' => ['text/plain']],
            ],
        ];
        $this->assertSame($expected, $this->newMap->getMapArray());
        $this->assertSame(['image/jpeg', 'text/plain'], $this->newMap->listTypes());
        $this->assertSame(['jpe', 'jpeg', 'jpg', 'txt'], $this->newMap->listExtensions());
        $this->assertSame([], $this->newMap->listAliases());
    }

    public function testLoadMapFromApacheFileZeroLines()
    {
        $this->updater->loadMapFromApacheFile(dirname(__FILE__) . '/../fixtures/zero.mime-types.txt');
        $this->assertSame([], $this->newMap->getMapArray());
    }

    public function testApplyOverridesFailure()
    {
        $this->updater->loadMapFromFreedesktopFile(dirname(__FILE__) . '/../fixtures/min.freedesktop.xml');
        $errors = $this->updater->applyOverrides([['addTypeExtensionMapping', ['application/x-pdf', 'pdf']]]);
        $this->assertSame(["Cannot map 'pdf' to 'application/x-pdf', 'application/x-pdf' is an alias"], $errors);
    }

    public function testLoadMapFromFreedesktopFile()
    {
        $this->updater->applyOverrides([['addTypeExtensionMapping', ['application/x-pdf', 'pdf']]]);
        $errors = $this->updater->loadMapFromFreedesktopFile(dirname(__FILE__) . '/../fixtures/min.freedesktop.xml');
        $this->assertSame(["Cannot set 'application/x-pdf' as alias for 'application/pdf', 'application/x-pdf' is already defined as a type"], $errors);
        $expected = [
            't' => [
                'application/pdf' => [
                  'a' => ['image/pdf', 'application/acrobat', 'application/nappdf'],
                  'desc' => ['PDF document', 'PDF: Portable Document Format'],
                  'e' => ['pdf']
                ],
                'application/x-atari-2600-rom' => [
                  'desc' => ['Atari 2600'],
                  'e' => ['a26']
                ],
                'application/x-pdf' => [
                  'e' => ['pdf']
                ],
                'text/plain' => [
                  'desc' => ['plain text document'],
                  'e' => ['txt', 'asc']
                ],
            ],
            'e' => [
                'a26' => ['t' => ['application/x-atari-2600-rom']],
                'asc' => ['t' => ['text/plain']],
                'pdf' => ['t' => ['application/x-pdf', 'application/pdf']],
                'txt' => ['t' => ['text/plain']],
            ],
            'a' => [
                'application/acrobat' => ['t' => ['application/pdf']],
                'application/nappdf' => ['t' => ['application/pdf']],
                'image/pdf' => ['t' => ['application/pdf']],
            ],
        ];
        $this->assertSame($expected, $this->newMap->getMapArray());
        $this->assertSame(['application/pdf', 'application/x-atari-2600-rom', 'application/x-pdf', 'text/plain'], $this->newMap->listTypes());
        $this->assertSame(['a26', 'asc', 'pdf', 'txt'], $this->newMap->listExtensions());
        $this->assertSame(['application/acrobat', 'application/nappdf', 'image/pdf'], $this->newMap->listAliases());
    }

    public function testLoadMapFromFreedesktopFileZeroLines()
    {
        $this->updater->loadMapFromFreedesktopFile(dirname(__FILE__) . '/../fixtures/zero.freedesktop.xml');
        $this->assertSame([], $this->newMap->getMapArray());
    }

    public function testEmptyMapNotWriteable()
    {
        $this->expectException('LogicException');
        $this->assertNull($this->newMap->getFileName());
    }

    public function testWriteMapToPhpClassFile()
    {
        $this->fileSystem->copy(__DIR__ . '/../../src/Map/MiniMap.php.test', __DIR__ . '/../../src/Map/MiniMap.php');
        MapHandler::setDefaultMapClass('\FileEye\MimeMap\Map\MiniMap');
        $map_a = MapHandler::map();
        $this->assertStringContainsString('src/Map/MiniMap.php', $map_a->getFileName());
        $content = file_get_contents($map_a->getFileName());
        $this->assertStringNotContainsString('text/plain', $content);
        $this->updater->loadMapFromApacheFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $this->updater->applyOverrides([['addTypeExtensionMapping', ['bing/bong', 'binbon']]]);
        $this->updater->writeMapToPhpClassFile($map_a->getFileName());
        $content = file_get_contents($map_a->getFileName());
        $this->assertStringContainsString('text/plain', $content);
        $this->assertStringContainsString('bing/bong', $content);
        $this->assertStringContainsString('binbon', $content);
        $this->fileSystem->remove(__DIR__ . '/../../src/Map/MiniMap.php');
    }

    public function testGetDefaultMapBuildFile()
    {
        $this->assertStringContainsString('default_map_build.yml', MapUpdater::getDefaultMapBuildFile());
    }
}
