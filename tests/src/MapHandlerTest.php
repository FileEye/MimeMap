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
        $this->assertContains('DefaultMap.php', $this->map->getFileName());
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

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     * @expectedExceptionMessage Cannot set 'baz/qoo' as alias for 'bar/foo', 'bar/foo' not defined
     */
    public function testAddAliasToMissingType()
    {
        $this->map->addTypeAlias('bar/foo', 'baz/qoo');
    }

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     * @expectedExceptionMessage Cannot set 'text/plain' as alias for 'text/richtext', 'text/plain' is already defined as a type
     */
    public function testAddAliasIsATypeAlready()
    {
        $this->map->addTypeAlias('text/richtext', 'text/plain');
    }

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     * @expectedExceptionMessage Cannot add description for 'application/acrobat', 'application/acrobat' is an alias
     */
    public function testAddDescriptionToAlias()
    {
        $this->map->addTypeDescription('application/acrobat', 'description of alias');
    }

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     */
    public function testSetExtensionDefaultTypeNoExtension()
    {
        $this->map->setExtensionDefaultType('zxzx', 'image/vnd.dvb.subtitle');
    }

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     */
    public function testSetExtensionDefaultTypeNoType()
    {
        $this->map->setExtensionDefaultType('sub', 'image/bingo');
    }

    public function testSetTypeDefaultExtension()
    {
        $this->assertSame(['jpeg', 'jpg', 'jpe'], (new Type('image/jpeg'))->getExtensions());
        $this->map->setTypeDefaultExtension('image/jpeg', 'jpg');
        $this->assertSame(['jpg', 'jpeg', 'jpe'], (new Type('image/JPEG'))->getExtensions());
    }

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     */
    public function testSetTypeDefaultExtensionNoExtension()
    {
        $this->map->setTypeDefaultExtension('image/jpeg', 'zxzx');
    }

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     */
    public function testSetTypeDefaultExtensionNoType()
    {
        $this->map->setTypeDefaultExtension('image/bingo', 'jpg');
    }

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     * @expectedExceptionMessage Cannot map 'pdf' to 'application/acrobat', 'application/acrobat' is an alias
     */
    public function testAddExtensionToAlias()
    {
        $this->map->addTypeExtensionMapping('application/acrobat', 'pdf');
    }
}
