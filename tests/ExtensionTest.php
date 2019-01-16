<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Extension;
use FileEye\MimeMap\MapHandler;
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

        // Adding an already existing mapping should duplicate entries.
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
        $this->assertSame('application/octet-stream', (new Extension('text'))->getDefaultType(false));
    }
}
