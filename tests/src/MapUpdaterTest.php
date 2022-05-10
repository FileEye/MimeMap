<?php declare(strict_types=1);

namespace FileEye\MimeMap\Test;

use Symfony\Component\Filesystem\Filesystem;
use FileEye\MimeMap\Map\MimeMapInterface;
use FileEye\MimeMap\MapHandler;
use FileEye\MimeMap\MapUpdater;

/**
 * @coversDefaultClass \FileEye\MimeMap\MapUpdater
 * @backupStaticAttributes enabled
 */
class MapUpdaterTest extends MimeMapTestBase
{

    /** @var MimeMapInterface */
    protected $newMap;

    /** @var MapUpdater */
    protected $updater;

    /** @var Filesystem */
    protected $fileSystem;

    public function setUp(): void
    {
        $this->updater = new MapUpdater();
        $this->updater->selectBaseMap(MapUpdater::DEFAULT_BASE_MAP_CLASS);
        $this->newMap = $this->updater->getMap();
        $this->assertInstanceOf(MapUpdater::DEFAULT_BASE_MAP_CLASS, $this->newMap);
        $this->fileSystem = new Filesystem();
    }

    public function tearDown(): void
    {
        $this->assertInstanceOf(MapUpdater::DEFAULT_BASE_MAP_CLASS, $this->newMap);
        $this->newMap->reset();
    }

    public function testLoadMapFromApacheFile(): void
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

    public function testLoadMapFromApacheFileZeroLines(): void
    {
        $this->updater->loadMapFromApacheFile(dirname(__FILE__) . '/../fixtures/zero.mime-types.txt');
        $this->assertSame([], $this->newMap->getMapArray());
    }

    public function testLoadMapFromApacheMissingFile(): void
    {
        $this->assertSame(
            ["Failed accessing certainly_missing.xml"],
            $this->updater->loadMapFromApacheFile('certainly_missing.xml')
        );
    }

    public function testApplyOverridesFailure(): void
    {
        $this->updater->loadMapFromFreedesktopFile(dirname(__FILE__) . '/../fixtures/min.freedesktop.xml');
        $errors = $this->updater->applyOverrides([['addTypeExtensionMapping', ['application/x-pdf', 'pdf']]]);
        $this->assertSame(["Cannot map 'pdf' to 'application/x-pdf', 'application/x-pdf' is an alias"], $errors);
    }

    public function testLoadMapFromFreedesktopFile(): void
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

    public function testLoadMapFromFreedesktopFileZeroLines(): void
    {
        $this->updater->loadMapFromFreedesktopFile(dirname(__FILE__) . '/../fixtures/zero.freedesktop.xml');
        $this->assertSame([], $this->newMap->getMapArray());
    }

    public function testLoadMapFromFreedesktopMissingFile(): void
    {
        $this->assertSame(
            ["Failed loading file certainly_missing.xml"],
            $this->updater->loadMapFromFreedesktopFile('certainly_missing.xml')
        );
    }

    public function testLoadMapFromFreedesktopInvalidFile(): void
    {
        $this->assertSame(
            ['Malformed XML in file ' . dirname(__FILE__) . '/../fixtures/invalid.freedesktop.xml'],
            $this->updater->loadMapFromFreedesktopFile(dirname(__FILE__) . '/../fixtures/invalid.freedesktop.xml')
        );
    }

    public function testEmptyMapNotWriteable(): void
    {
        $this->expectException('LogicException');
        $this->assertNull($this->newMap->getFileName());
    }

    public function testWriteMapToPhpClassFile(): void
    {
        $this->fileSystem->copy(__DIR__ . '/../../src/Map/MiniMap.php.test', __DIR__ . '/../../src/Map/MiniMap.php');
        MapHandler::setDefaultMapClass('\FileEye\MimeMap\Map\MiniMap');
        $map_a = MapHandler::map();
        $this->assertStringContainsString('src/Map/MiniMap.php', $map_a->getFileName());
        $content = file_get_contents($map_a->getFileName());
        assert(is_string($content));
        $this->assertStringNotContainsString('text/plain', $content);
        $this->updater->loadMapFromApacheFile(dirname(__FILE__) . '/../fixtures/min.mime-types.txt');
        $this->updater->applyOverrides([['addTypeExtensionMapping', ['bing/bong', 'binbon']]]);
        $this->updater->writeMapToPhpClassFile($map_a->getFileName());
        $content = file_get_contents($map_a->getFileName());
        assert(is_string($content));
        $this->assertStringContainsString('text/plain', $content);
        $this->assertStringContainsString('bing/bong', $content);
        $this->assertStringContainsString('binbon', $content);
        $this->fileSystem->remove(__DIR__ . '/../../src/Map/MiniMap.php');
    }

    public function testGetDefaultMapBuildFile(): void
    {
        $this->assertStringContainsString('default_map_build.yml', MapUpdater::getDefaultMapBuildFile());
    }
}
