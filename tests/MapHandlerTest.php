<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Extension;
use FileEye\MimeMap\MapHandler;
use FileEye\MimeMap\Type;
use PHPUnit\Framework\TestCase;

class MapHandlerTest extends TestCase
{
    public function testAdd()
    {
        $map = new MapHandler();
        $map->addMapping('bingo/bongo', 'bngbng');
        $this->assertSame(['bngbng'], (new Type('bingo/bongo'))->getExtensions());
        $this->assertSame('bngbng', (new Type('bingo/bongo'))->getDefaultExtension());
        $this->assertSame(['bingo/bongo'], (new Extension('bngbng'))->getTypes());
        $this->assertSame('bingo/bongo', (new Extension('bngbng'))->getDefaultType());

        // Adding an already existing mapping should not duplicate entries.
        $map->addMapping('bingo/bongo', 'bngbng');
        $this->assertSame(['bngbng'], (new Type('bingo/bongo'))->getExtensions());
        $this->assertSame(['bingo/bongo'], (new Extension('bngbng'))->getTypes());
    }

    public function testRemove()
    {
        $map = new MapHandler();

        $this->assertSame(['txt', 'text', 'conf', 'def', 'list', 'log', 'in'], (new Type('text/plain'))->getExtensions());
        $this->assertSame('txt', (new Type('text/plain'))->getDefaultExtension());
        $this->assertSame(['text/plain'], (new Extension('txt'))->getTypes());
        $this->assertSame('text/plain', (new Extension('txt'))->getDefaultType());

        $map->removeMapping('text/plain', 'txt');

        $this->assertSame(['text', 'conf', 'def', 'list', 'log', 'in'], (new Type('text/plain'))->getExtensions());
        $this->assertSame('text', (new Type('text/plain'))->getDefaultExtension());
        $this->assertSame(['application/octet-stream'], (new Extension('txt'))->getTypes(false));
        $this->assertSame('application/octet-stream', (new Extension('txt'))->getDefaultType(false));

        $map->removeType('text/plain');

        $this->assertSame([], (new Type('text/plain'))->getExtensions(false));
        $this->assertSame(null, (new Type('text/plain'))->getDefaultExtension(false));
        $this->assertSame(['application/octet-stream'], (new Extension('DEf'))->getTypes(false));
        $this->assertSame('application/octet-stream', (new Extension('DeF'))->getDefaultType(false));
    }

    public function testSetExtensionDefaultType()
    {
        $map = new MapHandler();
        $this->assertSame(['image/vnd.dvb.subtitle', 'text/vnd.dvb.subtitle'], (new Extension('sub'))->getTypes());
        $map->setExtensionDefaultType('SUB', 'text/vnd.dvb.subtitle');
        $this->assertSame(['text/vnd.dvb.subtitle', 'image/vnd.dvb.subtitle'], (new Extension('SUB'))->getTypes());
    }

    public function testSetTypeDefaultExtension()
    {
        $map = new MapHandler();
        $this->assertSame(['jpeg', 'jpg', 'jpe'], (new Type('image/jpeg'))->getExtensions());
        $map->setTypeDefaultExtension('image/jpeg', 'jpg');
        $this->assertSame(['jpg', 'jpeg', 'jpe'], (new Type('image/JPEG'))->getExtensions());
    }
}
