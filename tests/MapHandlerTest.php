<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Extension;
use FileEye\MimeMap\MapHandler;
use FileEye\MimeMap\Type;
use PHPUnit\Framework\TestCase;

/**
 * @backupStaticAttributes enabled
 */
class MapHandlerTest extends TestCase
{
    protected $map;

    public function setUp()
    {
        $this->map = new MapHandler();
    }

    public function testSort()
    {
        $this->map->addMapping('aaa/aaa', '000a')->sort();
        $this->assertSame('aaa/aaa', array_keys($this->map->get()['types'])[0]);
        $this->assertSame('000a', array_keys($this->map->get()['extensions'])[0]);
    }

    public function testAdd()
    {
        $this->map->addMapping('bingo/bongo', 'bngbng');
        $this->assertSame(['bngbng'], (new Type('bingo/bongo'))->getExtensions());
        $this->assertSame('bngbng', (new Type('bingo/bongo'))->getDefaultExtension());
        $this->assertSame(['bingo/bongo'], (new Extension('bngbng'))->getTypes());
        $this->assertSame('bingo/bongo', (new Extension('bngbng'))->getDefaultType());

        // Adding an already existing mapping should not duplicate entries.
        $this->map->addMapping('bingo/bongo', 'bngbng');
        $this->assertSame(['bngbng'], (new Type('bingo/bongo'))->getExtensions());
        $this->assertSame(['bingo/bongo'], (new Extension('bngbng'))->getTypes());
    }

    public function testRemove()
    {
        $this->assertSame(['txt', 'text', 'conf', 'def', 'list', 'log', 'in'], (new Type('text/plain'))->getExtensions());
        $this->assertSame('txt', (new Type('text/plain'))->getDefaultExtension());
        $this->assertSame(['text/plain'], (new Extension('txt'))->getTypes());
        $this->assertSame('text/plain', (new Extension('txt'))->getDefaultType());

        $this->assertTrue($this->map->removeMapping('text/plain', 'txt'));

        $this->assertSame(['text', 'conf', 'def', 'list', 'log', 'in'], (new Type('text/plain'))->getExtensions());
        $this->assertSame('text', (new Type('text/plain'))->getDefaultExtension());
        $this->assertSame(['application/octet-stream'], (new Extension('txt'))->getTypes(false));
        $this->assertSame('application/octet-stream', (new Extension('txt'))->getDefaultType(false));

        $this->assertTrue($this->map->removeType('text/plain'));

        $this->assertSame([], (new Type('text/plain'))->getExtensions(false));
        $this->assertSame(null, (new Type('text/plain'))->getDefaultExtension(false));
        $this->assertSame(['application/octet-stream'], (new Extension('DEf'))->getTypes(false));
        $this->assertSame('application/octet-stream', (new Extension('DeF'))->getDefaultType(false));

        $this->assertFalse($this->map->removeMapping('text/plain', 'axx'));
        $this->assertFalse($this->map->removeType('axx/axx'));
    }

    public function testSetExtensionDefaultType()
    {
        $this->assertSame(['text/vnd.dvb.subtitle', 'image/vnd.dvb.subtitle'], (new Extension('sub'))->getTypes());
        $this->map->setExtensionDefaultType('SUB', 'image/vnd.dvb.subtitle');
        $this->assertSame(['image/vnd.dvb.subtitle', 'text/vnd.dvb.subtitle'], (new Extension('SUB'))->getTypes());
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
}
