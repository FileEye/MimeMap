<?php
namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Type\Extension;
use PHPUnit\Framework\TestCase;

/**
 * Test class for MIME_Type_Extension.
 *
 * @author Christian Weiske <cweiske@php.net
 */
class ExtensionTest extends TestCase
{
    /**
     * @var \FileEye\MimeMap\Type\Extension
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
        $this->assertEquals('text/plain', $this->mte->getMIMEType('a.txt'));
        $this->assertEquals('text/plain', $this->mte->getMIMEType('/path/to/a.txt'));
        $this->assertEquals('image/png', $this->mte->getMIMEType('a.png'));
        $this->assertEquals('application/vnd.oasis.opendocument.text', $this->mte->getMIMEType('a.odt'));
    }

    public function testGetMIMETypeUppercase()
    {
        $this->assertEquals('text/plain', $this->mte->getMIMEType('a.TXT'));
    }

    public function testGetMIMETypeFullPath()
    {
        $this->assertEquals('text/plain', $this->mte->getMIMEType('/path/to/a.txt'));
        $this->assertEquals('text/plain', $this->mte->getMIMEType('C:\\Programs\\blubbr.txt'));
    }

    public function testGetMIMETypeNoExtension()
    {
        $this->assertInstanceOf('PEAR_Error', $this->mte->getMIMEType('file'));
        $this->assertInstanceOf('PEAR_Error', $this->mte->getMIMEType('blubbr'));
    }

    public function testGetMIMETypeFullPathNoExtension()
    {
        $this->assertInstanceOf('PEAR_Error', $this->mte->getMIMEType('/path/to/file'));
        $this->assertInstanceOf('PEAR_Error', $this->mte->getMIMEType('C:\\Programs\\blubbr'));
    }

    public function testGetMIMETypeUnknownExtension()
    {
        $this->assertInstanceOf('PEAR_Error', $this->mte->getMIMEType('file.ohmygodthatisnoextension'));
    }

    public function testGetExtension()
    {
        $this->assertEquals('atom', $this->mte->getExtension('application/atom+xml'));
        $this->assertEquals('csv', $this->mte->getExtension('text/csv'));
    }

    public function testGetExtensionFail()
    {
        $this->assertInstanceOf('PEAR_Error', $this->mte->getExtension(null));
        $this->assertInstanceOf('PEAR_Error', $this->mte->getExtension(''));
        $this->assertInstanceOf('PEAR_Error', $this->mte->getExtension('n'));
        $this->assertInstanceOf('PEAR_Error', $this->mte->getExtension('n/n'));
    }
}
