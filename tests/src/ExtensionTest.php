<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Extension;

class ExtensionTest extends MimeMapTestBase
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
        $this->assertSame(['text/vnd.dvb.subtitle', 'image/vnd.dvb.subtitle', 'text/x-microdvd', 'text/x-mpsub', 'text/x-subviewer'], (new Extension('sub'))->getTypes());
        $this->assertSame(['text/vnd.dvb.subtitle', 'image/vnd.dvb.subtitle', 'text/x-microdvd', 'text/x-mpsub', 'text/x-subviewer'], (new Extension('sUb'))->getTypes());
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
}
