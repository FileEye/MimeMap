<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Type;
use FileEye\MimeMap\Parameter;
use PHPUnit\Framework\TestCase;

class TypeTest extends TestCase
{
    public function testParse()
    {
        $mt = new Type('application/ogg;description=Hello there!;asd=fgh');
        $this->assertEquals('application', $mt->getMedia());
        $this->assertEquals('ogg', $mt->getSubType());

        $params = [
            'description' => ['Hello there!', ''],
            'asd' => ['fgh', ''],
        ];
        $this->assertCount(2, $mt->getParameters());
        foreach ($params as $name => $param) {
            $this->assertTrue(isset($mt->getParameters()[$name]));
            $this->assertInstanceOf('FileEye\MimeMap\TypeParameter', $mt->getParameters()[$name]);
            $this->assertEquals($name, $mt->getParameters()[$name]->name);
            $this->assertEquals($param[0], $mt->getParameters()[$name]->value);
            $this->assertEquals($param[1], $mt->getParameters()[$name]->comment);
        }
    }

    public function testParseAgain()
    {
        $mt = new Type('application/ogg;description=Hello there!;asd=fgh');
        $this->assertCount(2, $mt->getParameters());

        $mt = new Type('text/plain;hello=there!');
        $this->assertCount(1, $mt->getParameters());
    }

    public function testHasParameters()
    {
        $this->assertFalse((new Type('text/plain'))->hasParameters());
        $this->assertFalse((new Type('text/*'))->hasParameters());
        $this->assertFalse((new Type('*/*'))->hasParameters());
        $this->assertTrue((new Type('text/xml;description=test'))->hasParameters());
        $this->assertTrue((new Type('text/xml;one=test;two=three'))->hasParameters());
    }

    public function testGetParameters()
    {
        $this->assertEquals([], (new Type('text/plain'))->getParameters());
        // The rest is tested in testParse().
    }

/*    public function testStripComments()
    {
        $this->assertEquals('def', Type::stripComments('(abc)def(ghi)', $null));
        $this->assertEquals('def', Type::stripComments('(abc)def', $null));
        $this->assertEquals('def', Type::stripComments('def(ghi)', $null));
    }

    public function testStripCommentsEscaped()
    {
        $comment = '';
        $this->assertEquals('def', Type::stripComments('(\)abc)def(\))', $comment));
        $this->assertEquals(')abc )', $comment);
    }

    public function testStripCommentsEscapedString()
    {
        $comment = false;
        $this->assertEquals('foo', Type::stripComments('\\foo(abc)', $comment));
        $this->assertEquals('abc', $comment);
    }

    public function testStripCommentsQuoted()
    {
        $this->assertEquals('def', Type::stripComments('(a"bc)def")def', $null));
        $this->assertEquals('(abc)def', Type::stripComments('"(abc)def"', $null));
    }

    public function testStripCommentsParameterComment()
    {
        $comment = '';
        $this->assertEquals('def', Type::stripComments('(abc)def(ghi)', $comment));
        $this->assertEquals('abc ghi', $comment);
    }
*/
    public function testGetMedia()
    {
        $this->assertEquals('text', (new Type('text/plain'))->getMedia());
        $this->assertEquals('application', (new Type('application/ogg'))->getMedia());
        $this->assertEquals('*', (new Type('*/*'))->getMedia());
    }

    public function testGetSubType()
    {
        $this->assertEquals('plain', (new Type('text/plain'))->getSubType());
        $this->assertEquals('ogg', (new Type('application/ogg'))->getSubType());
        $this->assertEquals('*', (new Type('*/*'))->getSubType());
        $this->assertEquals('plain', (new Type('text/plain;a=b'))->getSubType());
    }

    public function testToString()
    {
        $mt = new Type('text/xml');
        $this->assertEquals('text/xml', $mt->toString());

        $mt = new Type('text/xml; this="is"; a="parameter" (with a comment)');
        $this->assertEquals('text/xml; this="is"; a="parameter" (with a comment)', $mt->toString());
    }

    public function testIsExperimental()
    {
        $this->assertTrue((new Type('text/x-test'))->isExperimental());
        $this->assertTrue((new Type('image/X-test'))->isExperimental());
        $this->assertFalse((new Type('text/plain'))->isExperimental());
    }

    public function testIsVendor()
    {
        $this->assertTrue((new Type('application/vnd.openoffice'))->isVendor());
        $this->assertFalse((new Type('application/vendor.openoffice'))->isVendor());
        $this->assertFalse((new Type('vnd/fsck'))->isVendor());
    }

    public function testIsWildcard()
    {
        $this->assertTrue((new Type('*/*'))->isWildcard());
        $this->assertTrue((new Type('image/*'))->isWildcard());
        $this->assertFalse((new Type('text/plain'))->isWildcard());
    }

    public function testWildcardMatch()
    {
        $this->assertTrue((new Type('image/png'))->wildcardMatch('*/*'));
        $this->assertTrue((new Type('image/png'))->wildcardMatch('image/*'));
        $this->assertFalse((new Type('text/plain'))->wildcardMatch('image/*'));
    }

    public function testWildcardMatchNoWildcard()
    {
        $this->assertFalse((new Type('image/png'))->wildcardMatch('image/foo'));
    }

    public function testAddParameter()
    {
        $mt = new Type('image/png; foo=bar');
        $mt->addParameter('baz', 'val', 'this is a comment');
        $res = $mt->toString();
        $this->assertContains('foo=', $res);
        $this->assertContains('bar', $res);

        $this->assertContains('baz=', $res);
        $this->assertContains('val', $res);
        $this->assertContains('(this is a comment)', $res);
    }

    public function testRemoveParameter()
    {
        $mt = new Type('image/png; foo=bar');
        $mt->addParameter('baz', 'val', 'this is a comment');
        $mt->removeParameter('foo');
        $res = $mt->toString();
        $this->assertNotContains('foo=', $res);
        $this->assertNotContains('bar', $res);
        $this->assertContains('baz=', $res);
    }

    public function testComments()
    {
        $type = new Type('(UTF-8 Plain Text) text / plain ; charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8"', $type->toString());

        $type = new Type('text (Text) / plain ; charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8"', $type->toString());

        $type = new Type('text / (Plain) plain ; charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8"', $type->toString());

        $type = new Type('text / plain (Plain Text) ; charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8"', $type->toString());

        $type = new Type('text / plain ; (Charset=utf-8) charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8" (Charset=utf-8)', $type->toString());

        $type = new Type('text / plain ; charset (Charset) = utf-8');
        $this->assertEquals('text/plain; charset="utf-8" (Charset)', $type->toString());

        $type = new Type('text / plain ; charset = (UTF8) utf-8');
        $this->assertEquals('text/plain; charset="utf-8" (UTF8)', $type->toString());

        $type = new Type('text / plain ; charset = utf-8 (UTF-8 Plain Text)');
        $this->assertEquals('text/plain; charset="utf-8" (UTF-8 Plain Text)', $type->toString());

        $type = new Type('application/x-foobar;description="bbgh(kdur"');
        $this->assertEquals('application/x-foobar; description="bbgh(kdur"', $type->toString());

        $type = new Type('application/x-foobar;description="a \"quoted string\""');
        $this->assertEquals('application/x-foobar; description="a \"quoted string\""', $type->toString());
    }

    public function testGetDefaultExtension()
    {
        $this->assertEquals('atom', (new Type('application/atom+xml'))->getDefaultExtension());
        $this->assertEquals('csv', (new Type('text/csv'))->getDefaultExtension());
    }

    /**
     * @expectedException RuntimeException
     * @dataProvider getDefaultExtensionFailProvider
     */
    public function testGetDefaultExtensionFail($type)
    {
        $this->assertNull((new Type($type))->getDefaultExtension());
    }

    /**
     * Data provider for testGetDefaultExtensionFail.
     */
    public function getDefaultExtensionFailProvider()
    {
        return [
            [null],
            [''],
            ['n'],
            ['n/n'],
        ];
    }
}
