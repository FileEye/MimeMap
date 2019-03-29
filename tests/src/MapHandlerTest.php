<?php

namespace FileEye\MimeMap\Test;

use FileEye\MimeMap\Extension;
use FileEye\MimeMap\MapHandler;
use FileEye\MimeMap\Type;

/**
 * @backupStaticAttributes enabled
 */
class MapHandlerTest extends MimeMapTestBase
{
    protected $map;

    public function fcSetUp()
    {
        $this->map = MapHandler::map();
    }

    public function testMap()
    {
        $this->assertStringContainsString('DefaultMap.php', $this->map->getFileName());
    }

    public function testSort()
    {
        $this->map->addTypeExtensionMapping('aaa/aaa', '000a')->sort();
        $this->assertSame('aaa/aaa', $this->map->listTypes()[0]);
        $this->assertSame('000a', $this->map->listExtensions()[0]);
    }

    public function testAdd()
    {
        // Adding a new type with a new extension.
        $this->map->addTypeExtensionMapping('bingo/bongo', 'bngbng');
        $this->assertSame(['bngbng'], (new Type('bingo/bongo'))->getExtensions());
        $this->assertSame('bngbng', (new Type('bingo/bongo'))->getDefaultExtension());
        $this->assertSame(['bingo/bongo'], (new Extension('bngbng'))->getTypes());
        $this->assertSame('bingo/bongo', (new Extension('bngbng'))->getDefaultType());

        // Adding an already existing mapping should not duplicate entries.
        $this->map->addTypeExtensionMapping('bingo/bongo', 'bngbng');
        $this->assertSame(['bngbng'], (new Type('bingo/bongo'))->getExtensions());
        $this->assertSame(['bingo/bongo'], (new Extension('bngbng'))->getTypes());

        // Adding another extension to existing type.
        $this->map->addTypeExtensionMapping('bingo/bongo', 'bigbog');
        $this->assertSame(['bngbng', 'bigbog'], (new Type('bingo/bongo'))->getExtensions());
        $this->assertSame(['bingo/bongo'], (new Extension('bigbog'))->getTypes());

        // Adding another type to existing extension.
        $this->map->addTypeExtensionMapping('boing/being', 'bngbng');
        $this->assertSame(['bngbng'], (new Type('boing/being'))->getExtensions());
        $this->assertSame(['bingo/bongo', 'boing/being'], (new Extension('bngbng'))->getTypes());
    }

    public function testRemove()
    {
        $this->assertSame(['txt', 'text', 'conf', 'def', 'list', 'log', 'in', 'asc'], (new Type('text/plain'))->getExtensions());
        $this->assertSame('txt', (new Type('text/plain'))->getDefaultExtension());
        $this->assertSame(['text/plain'], (new Extension('txt'))->getTypes());
        $this->assertSame('text/plain', (new Extension('txt'))->getDefaultType());

        // Remove an existing type-extension pair.
        $this->assertTrue($this->map->removeTypeExtensionMapping('text/plain', 'txt'));
        $this->assertSame(['text', 'conf', 'def', 'list', 'log', 'in', 'asc'], (new Type('text/plain'))->getExtensions());
        $this->assertSame('text', (new Type('text/plain'))->getDefaultExtension());
        $this->assertSame(['application/octet-stream'], (new Extension('txt'))->getTypes(false));
        $this->assertSame('application/octet-stream', (new Extension('txt'))->getDefaultType(false));

        // Try removing a non-existing extension.
        $this->assertFalse($this->map->removeTypeExtensionMapping('text/plain', 'axx'));

        // Remove an existing alias.
        $this->assertSame(['application/x-pdf', 'image/pdf', 'application/acrobat', 'application/nappdf'], (new Type('application/pdf'))->getAliases());
        $this->assertTrue($this->map->removeTypeAlias('application/pdf', 'application/x-pdf'));
        $this->assertSame(['image/pdf', 'application/acrobat', 'application/nappdf'], (new Type('application/pdf'))->getAliases());

        // Try removing a non-existing alias.
        $this->assertFalse($this->map->removeTypeAlias('application/pdf', 'foo/bar'));
        $this->assertSame(['image/pdf', 'application/acrobat', 'application/nappdf'], (new Type('application/pdf'))->getAliases());

        // Remove an existing type.
        $this->assertTrue($this->map->removeType('text/plain'));
        $this->assertSame([], (new Type('text/plain'))->getExtensions(false));
        $this->assertSame(null, (new Type('text/plain'))->getDefaultExtension(false));
        $this->assertSame(['application/octet-stream'], (new Extension('DEf'))->getTypes(false));
        $this->assertSame('application/octet-stream', (new Extension('DeF'))->getDefaultType(false));

        // Remove an existing type with aliases.
        $this->assertTrue($this->map->hasAlias('text/x-markdown'));
        $this->assertTrue($this->map->removeType('text/markdown'));
        $this->assertFalse($this->map->hasAlias('text/x-markdown'));
        $this->assertSame([], (new Type('text/markdown'))->getExtensions(false));
        $this->assertSame(null, (new Type('text/markdown'))->getDefaultExtension(false));
        $this->assertSame([], (new Type('text/x-markdown'))->getExtensions(false));
        $this->assertSame(null, (new Type('text/x-markdown'))->getDefaultExtension(false));
        $this->assertSame(['application/octet-stream'], (new Extension('MD'))->getTypes(false));
        $this->assertSame('application/octet-stream', (new Extension('md'))->getDefaultType(false));

        // Try removing a non-existing type.
        $this->assertFalse($this->map->removeType('axx/axx'));
    }

    public function testHasType()
    {
        $this->assertTrue($this->map->hasType('text/plain'));
        $this->assertFalse($this->map->hasType('foo/bar'));
    }

    public function testHasAlias()
    {
        $this->assertTrue($this->map->hasAlias('application/acrobat'));
        $this->assertFalse($this->map->hasAlias('foo/bar'));
    }

    public function testHasExtension()
    {
        $this->assertTrue($this->map->hasExtension('jpg'));
        $this->assertFalse($this->map->hasExtension('jpgjpg'));
    }

    public function testSetExtensionDefaultType()
    {
        $this->assertSame(['text/vnd.dvb.subtitle', 'image/vnd.dvb.subtitle', 'text/x-microdvd', 'text/x-mpsub', 'text/x-subviewer'], (new Extension('sub'))->getTypes());
        $this->map->setExtensionDefaultType('SUB', 'image/vnd.dvb.subtitle');
        $this->assertSame(['image/vnd.dvb.subtitle', 'text/vnd.dvb.subtitle', 'text/x-microdvd', 'text/x-mpsub', 'text/x-subviewer'], (new Extension('SUB'))->getTypes());
    }

    public function testReAddAliasToType()
    {
        $this->assertSame(['image/psd', 'image/x-psd', 'image/photoshop', 'image/x-photoshop', 'application/photoshop', 'application/x-photoshop',], (new Type('image/vnd.adobe.photoshop'))->getAliases());
        $this->map->addTypeAlias('image/vnd.adobe.photoshop', 'application/x-photoshop');
        $this->assertSame(['image/psd', 'image/x-psd', 'image/photoshop', 'image/x-photoshop', 'application/photoshop', 'application/x-photoshop',], (new Type('image/vnd.adobe.photoshop'))->getAliases());
    }

    public function testAddAliasToMultipleTypes()
    {
        $this->assertSame([], (new Type('text/plain'))->getAliases());
        $this->bcSetExpectedException('FileEye\MimeMap\MappingException', "Cannot set 'application/x-photoshop' as alias for 'text/plain', it is an alias of 'image/vnd.adobe.photoshop' already");
        $this->map->addTypeAlias('text/plain', 'application/x-photoshop');
        $this->assertSame([], (new Type('text/plain'))->getAliases());
    }

    public function testAddAliasToMissingType()
    {
        $this->bcSetExpectedException('FileEye\MimeMap\MappingException', "Cannot set 'baz/qoo' as alias for 'bar/foo', 'bar/foo' not defined");
        $this->map->addTypeAlias('bar/foo', 'baz/qoo');
    }

    public function testAddAliasIsATypeAlready()
    {
        $this->bcSetExpectedException('FileEye\MimeMap\MappingException', "Cannot set 'text/plain' as alias for 'text/richtext', 'text/plain' is already defined as a type");
        $this->map->addTypeAlias('text/richtext', 'text/plain');
    }

    public function testAddDescriptionToAlias()
    {
        $this->bcSetExpectedException('FileEye\MimeMap\MappingException', "Cannot add description for 'application/acrobat', 'application/acrobat' is an alias");
        $this->map->addTypeDescription('application/acrobat', 'description of alias');
    }

    public function testSetExtensionDefaultTypeNoExtension()
    {
        $this->expectException('FileEye\MimeMap\MappingException');
        $this->map->setExtensionDefaultType('zxzx', 'image/vnd.dvb.subtitle');
    }

    public function testSetExtensionDefaultTypeNoType()
    {
        $this->expectException('FileEye\MimeMap\MappingException');
        $this->map->setExtensionDefaultType('sub', 'image/bingo');
    }

    /**
     * Check that a type alias can be set as extension default.
     */
    public function testSetExtensionDefaultTypeToAlias()
    {
        $this->assertSame(['application/pdf'], (new Extension('pdf'))->getTypes());

        $this->map->setExtensionDefaultType('pdf', 'application/x-pdf');
        $this->assertSame(['application/x-pdf', 'application/pdf'], (new Extension('pdf'))->getTypes());
        $this->assertSame('application/x-pdf', (new Extension('pdf'))->getDefaultType());

        $this->map->setExtensionDefaultType('pdf', 'image/pdf');
        $this->assertSame(['image/pdf', 'application/x-pdf', 'application/pdf'], (new Extension('pdf'))->getTypes());
        $this->assertSame('image/pdf', (new Extension('pdf'))->getDefaultType());

        // Remove the alias, should be removed from extension types.
        $this->assertTrue($this->map->removeTypeAlias('application/pdf', 'application/x-pdf'));
        $this->assertSame(['image/pdf', 'application/pdf'], (new Extension('pdf'))->getTypes());
        $this->assertSame('image/pdf', (new Extension('pdf'))->getDefaultType());

        // Add a fake MIME type to 'psd', an alias to that, then remove
        // 'image/vnd.adobe.photoshop'.
        $this->assertSame(['image/vnd.adobe.photoshop'], (new Extension('psd'))->getTypes());
        $this->assertSame('image/vnd.adobe.photoshop', (new Extension('psd'))->getDefaultType());
        $this->map->setExtensionDefaultType('psd', 'image/psd');
        $this->assertSame(['image/psd', 'image/vnd.adobe.photoshop'], (new Extension('psd'))->getTypes());
        $this->assertSame('image/psd', (new Extension('psd'))->getDefaultType());
        $this->map->addTypeExtensionMapping('bingo/bongo', 'psd');
        $this->assertSame(['image/psd', 'image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
        $this->map->addTypeAlias('bingo/bongo', 'bar/foo');
        $this->assertSame(['image/psd', 'image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
        $this->map->setExtensionDefaultType('psd', 'bar/foo');
        $this->assertSame(['bar/foo', 'image/psd', 'image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
        $this->assertTrue($this->map->removeType('image/vnd.adobe.photoshop'));
        $this->assertSame(['bar/foo', 'bingo/bongo'], (new Extension('psd'))->getTypes());
    }

    /**
     * Check removing an aliased type mapping.
     */
    public function testRemoveAliasedTypeMapping()
    {
        $this->map->addTypeExtensionMapping('bingo/bongo', 'psd');
        $this->assertSame(['image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
        $this->map->addTypeAlias('bingo/bongo', 'bar/foo');
        $this->assertSame(['image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
        $this->map->setExtensionDefaultType('psd', 'bar/foo');
        $this->assertSame(['bar/foo', 'image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
        $this->map->removeTypeExtensionMapping('bar/foo', 'psd');
        $this->assertSame(['image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
    }

    /**
     * Check that a removing a type mapping also remove its aliases.
     */
    public function testRemoveUnaliasedTypeMapping()
    {
        // Add a fake MIME type to 'psd', an alias to that, then remove
        // 'image/vnd.adobe.photoshop'.
        $this->map->addTypeExtensionMapping('bingo/bongo', 'psd');
        $this->assertSame(['image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
        $this->map->addTypeAlias('bingo/bongo', 'bar/foo');
        $this->assertSame(['image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
        $this->map->setExtensionDefaultType('psd', 'bar/foo');
        $this->assertSame(['bar/foo', 'image/vnd.adobe.photoshop', 'bingo/bongo'], (new Extension('psd'))->getTypes());
        $this->map->removeTypeExtensionMapping('bingo/bongo', 'psd');
        $this->assertSame(['image/vnd.adobe.photoshop'], (new Extension('psd'))->getTypes());
    }

    public function testSetExtensionDefaultTypeToInvalidAlias()
    {
        $this->bcSetExpectedException('FileEye\MimeMap\MappingException', "Cannot set 'image/psd' as default type for extension 'pdf', its unaliased type 'image/vnd.adobe.photoshop' is not associated to 'pdf'");
        $this->map->setExtensionDefaultType('pdf', 'image/psd');
    }

    public function testSetTypeDefaultExtension()
    {
        $this->assertSame(['jpeg', 'jpg', 'jpe'], (new Type('image/jpeg'))->getExtensions());
        $this->map->setTypeDefaultExtension('image/jpeg', 'jpg');
        $this->assertSame(['jpg', 'jpeg', 'jpe'], (new Type('image/JPEG'))->getExtensions());
    }

    public function testSetTypeDefaultExtensionNoExtension()
    {
        $this->expectException('FileEye\MimeMap\MappingException');
        $this->map->setTypeDefaultExtension('image/jpeg', 'zxzx');
    }

    public function testSetTypeDefaultExtensionNoType()
    {
        $this->expectException('FileEye\MimeMap\MappingException');
        $this->map->setTypeDefaultExtension('image/bingo', 'jpg');
    }

    public function testAddExtensionToAlias()
    {
        $this->bcSetExpectedException('FileEye\MimeMap\MappingException', "Cannot map 'pdf' to 'application/acrobat', 'application/acrobat' is an alias");
        $this->map->addTypeExtensionMapping('application/acrobat', 'pdf');
    }

    /**
     * Data provider for testAddMalformedTypeExtensionMapping.
     */
    public function malformedTypeProvider()
    {
        return [
            'empty string' => [''],
            'n' => ['n'],
            'no media' => ['/n'],
            'no sub type' => ['n/'],
            'no comment closing bracket a' => ['image (open ()/*'],
            'no comment closing bracket b' => ['image / * (open (())'],
        ];
    }

    /**
     * @dataProvider malformedTypeProvider
     */
    public function testAddMalformedTypeExtensionMapping($type)
    {
        $this->expectException('FileEye\MimeMap\MalformedTypeException');
        $this->map->addTypeExtensionMapping($type, 'xxx');
    }
}
