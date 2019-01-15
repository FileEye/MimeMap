<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Extension;
use FileEye\MimeMap\MapHandler;
use PHPUnit\Framework\TestCase;

class ExtensionTest extends TestCase
{
    /**
     * @var \FileEye\MimeMap\Extension
     */
    protected $mte;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->mte = new Extension();
    }

    public function testGetMIMEType()
    {
        $this->assertEquals('text/plain', $this->mte->getDefaultType('txt'));
        $this->assertEquals('image/png', $this->mte->getDefaultType('png'));
        $this->assertEquals('application/vnd.oasis.opendocument.text', $this->mte->getDefaultType('odt'));
    }

    public function testGetMIMETypeUppercase()
    {
        $this->assertEquals('text/plain', $this->mte->getDefaultType('TXT'));
    }

    public function testGetMIMETypeUnknownExtension()
    {
        $this->assertSame('application/octet-stream', $this->mte->getDefaultType('ohmygodthatisnoextension'));
    }

    // xx move to its own test

    public function testAddMapping()
    {
        $map = new MapHandler();
        $map->addMapping('bingo/bongo', 'bngbng');
        $this->assertSame('bingo/bongo', $this->mte->getDefaultType('bngbng'));
    }

    public function testRemoveMapping()
    {
        $map = new MapHandler();
        $this->assertSame('text/plain', $this->mte->getDefaultType('txt'));
        $map->removeMapping('text/plain', 'txt');
        $this->assertSame('application/octet-stream', $this->mte->getDefaultType('txt'));
    }
}
