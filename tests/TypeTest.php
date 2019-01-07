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
        $this->assertEquals(2, count($mt->parameters));
        foreach ($params as $name => $param) {
            $this->assertTrue(isset($mt->parameters[$name]));
            $this->assertInstanceOf('FileEye\MimeMap\TypeParameter', $mt->parameters[$name]);
            $this->assertEquals($name, $mt->parameters[$name]->name);
            $this->assertEquals($param[0], $mt->parameters[$name]->value);
            $this->assertEquals($param[1], $mt->parameters[$name]->comment);
        }
    }

    public function testParseAgain()
    {
        $mt = new Type('application/ogg;description=Hello there!;asd=fgh');
        $this->assertEquals(2, count($mt->parameters));

        $mt = new Type('text/plain;hello=there!');
        $this->assertEquals(1, count($mt->parameters));
    }

    public function testHasParameters()
    {
        $this->assertFalse(Type::hasParameters('text/plain'));
        $this->assertFalse(Type::hasParameters('text/*'));
        $this->assertFalse(Type::hasParameters('*/*'));
        $this->assertTrue(Type::hasParameters('text/xml;description=test'));
        $this->assertTrue(Type::hasParameters('text/xml;one=test;two=three'));
    }

    public function testGetParameters()
    {
        $this->assertEquals([], Type::getParameters('text/plain'));
        // The rest is tested in testParse().
    }

    public function testStripParameters()
    {
        $this->assertEquals('text/plain', Type::stripParameters('text/plain'));
        $this->assertEquals('text/plain', Type::stripParameters('text/plain;asd=def'));
        $this->assertEquals('text/plain', Type::stripParameters('text/plain;asd=def;ghj=jkl'));
    }

    public function testStripComments()
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

    public function testGet()
    {
        $mt = new Type('text/xml');
        $this->assertEquals('text/xml', $mt->get());

        $mt = new Type('text/xml; this="is"; a="parameter" (with a comment)');
        $this->assertEquals('text/xml; this="is"; a="parameter" (with a comment)', $mt->get());
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
        $res = $mt->get();
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
        $res = $mt->get();
        $this->assertNotContains('foo=', $res);
        $this->assertNotContains('bar', $res);
        $this->assertContains('baz=', $res);
    }

    public function testComments()
    {
        $type = new Type('(UTF-8 Plain Text) text / plain ; charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8"', $type->get());

        $type = new Type('text (Text) / plain ; charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8"', $type->get());

        $type = new Type('text / (Plain) plain ; charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8"', $type->get());

        $type = new Type('text / plain (Plain Text) ; charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8"', $type->get());

        $type = new Type('text / plain ; (Charset=utf-8) charset = utf-8');
        $this->assertEquals('text/plain; charset="utf-8" (Charset=utf-8)', $type->get());

        $type = new Type('text / plain ; charset (Charset) = utf-8');
        $this->assertEquals('text/plain; charset="utf-8" (Charset)', $type->get());

        $type = new Type('text / plain ; charset = (UTF8) utf-8');
        $this->assertEquals('text/plain; charset="utf-8" (UTF8)', $type->get());

        $type = new Type('text / plain ; charset = utf-8 (UTF-8 Plain Text)');
        $this->assertEquals('text/plain; charset="utf-8" (UTF-8 Plain Text)', $type->get());

        $type = new Type('application/x-foobar;description="bbgh(kdur"');
        $this->assertEquals('application/x-foobar; description="bbgh(kdur"', $type->get());

        $type = new Type('application/x-foobar;description="a \"quoted string\""');
        $this->assertEquals('application/x-foobar; description="a \"quoted string\""', $type->get());
    }
}
