<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Extension;
use PHPUnit\Framework\TestCase;

/**
 * Test class for MIME_Type_Extension.
 *
 * @author Christian Weiske <cweiske@php.net
 */
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
        $this->assertEquals('text/plain', $this->mte->getMIMEType('txt'));
        $this->assertEquals('image/png', $this->mte->getMIMEType('png'));
        $this->assertEquals('application/vnd.oasis.opendocument.text', $this->mte->getMIMEType('odt'));
    }

    public function testGetMIMETypeUppercase()
    {
        $this->assertEquals('text/plain', $this->mte->getMIMEType('TXT'));
    }

    /**
     * @expectedException RuntimeException
     */
    public function testGetMIMETypeUnknownExtension()
    {
        $this->assertNull($this->mte->getMIMEType('ohmygodthatisnoextension'));
    }
}
