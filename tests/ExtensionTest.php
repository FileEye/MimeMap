<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Extension;
use FileEye\MimeMap\MapHandler;
use FileEye\MimeMap\Type;
use PHPUnit\Framework\TestCase;

class ExtensionTest extends TestCase
{
    public function testGetDefaultType()
    {
        $this->assertSame('text/plain', (new Extension('txt'))->getDefaultType());
        $this->assertSame('text/plain', (new Extension('TXT'))->getDefaultType());
        $this->assertSame('image/png', (new Extension('png'))->getDefaultType());
        $this->assertSame('application/vnd.oasis.opendocument.text', (new Extension('odt'))->getDefaultType());
    }

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     */
    public function testGetStrictDefaultTypeUnknownExtension()
    {
        $this->assertSame('application/octet-stream', (new Extension('ohmygodthatisnoextension'))->getDefaultType());
    }

    public function testGetNoStrictDefaultTypeUnknownExtension()
    {
        $this->assertSame('application/octet-stream', (new Extension('ohmygodthatisnoextension'))->getDefaultType(false));
    }

    public function testGetTypes()
    {
        $this->assertSame(['image/vnd.dvb.subtitle', 'text/vnd.dvb.subtitle'], (new Extension('sub'))->getTypes());
        $this->assertSame(['image/vnd.dvb.subtitle', 'text/vnd.dvb.subtitle'], (new Extension('sUb'))->getTypes());
    }

    /**
     * @expectedException \FileEye\MimeMap\MappingException
     */
    public function testGetStrictTypesUnknownExtension()
    {
        $this->assertSame(['application/octet-stream'], (new Extension('ohmygodthatisnoextension'))->getTypes());
    }

    public function testGetNoStrictTypesUnknownExtension()
    {
        $this->assertSame(['application/octet-stream'], (new Extension('ohmygodthatisnoextension'))->getTypes(false));
    }

    // xx move to its own test

    public function testAddMapping()
    {
        $map = new MapHandler();
        $map->addMapping('bingo/bongo', 'bngbng');
        $this->assertSame('bingo/bongo', (new Extension('bngbng'))->getDefaultType());
        $this->assertSame(['bingo/bongo'], (new Extension('bngbng'))->getTypes());

        // Adding an already existing mapping should not duplicate entries.
        $map->addMapping('bingo/bongo', 'bngbng');
        $this->assertSame(['bingo/bongo'], (new Extension('bngbng'))->getTypes());
    }

    public function testRemoveMapping()
    {
        $map = new MapHandler();
        $this->assertSame('text/plain', (new Extension('txt'))->getDefaultType());
        $map->removeMapping('text/plain', 'txt');
        $this->assertSame('application/octet-stream', (new Extension('txt'))->getDefaultType(false));
        $this->assertSame('text/plain', (new Extension('text'))->getDefaultType());
        $map->removeType('text/plain');
        $this->assertSame(['application/octet-stream'], (new Extension('text'))->getTypes(false));
        $this->assertSame('application/octet-stream', (new Extension('text'))->getDefaultType(false));
    }

    public function testSetExtensionDefaultType()
    {
        $map = new MapHandler();
        $this->assertSame(['image/vnd.dvb.subtitle', 'text/vnd.dvb.subtitle'], (new Extension('sub'))->getTypes());
        $map->setExtensionDefaultType('SUB',  'text/vnd.dvb.subtitle');
        $this->assertSame(['text/vnd.dvb.subtitle', 'image/vnd.dvb.subtitle'], (new Extension('SUB'))->getTypes());
    }

    public function testSetTypeDefaultExtension()
    {
        $map = new MapHandler();
        $this->assertSame(['jpeg'], (new Type('image/jpeg'))->getExtensions());
        $map->setTypeDefaultExtension('image/jpeg', 'jpg');
        $this->assertSame(['jpg'], (new Type('image/jpeg'))->getExtensions());
    }
}
