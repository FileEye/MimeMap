<?php
namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Type;
use PHPUnit\Framework\TestCase;

class TypeTest extends TestCase
{
    public function testParse()
    {
        $mt = new Type();
        $mt->parse('application/ogg;description=Hello there!;asd=fgh');
        $this->assertEquals('application', $mt->media);
        $this->assertEquals('ogg'        , $mt->subType);

        $params = array(
            'description' => array('Hello there!', ''),
            'asd' => array('fgh', '')
        );
        $this->assertEquals(2, count($mt->parameters));
        foreach ($params as $name => $param) {
            $this->assertTrue(isset($mt->parameters[$name]));
            $this->assertInstanceOf('MIME_Type_Parameter', $mt->parameters[$name]);
            $this->assertEquals($name,     $mt->parameters[$name]->name);
            $this->assertEquals($param[0], $mt->parameters[$name]->value);
            $this->assertEquals($param[1], $mt->parameters[$name]->comment);
        }
    }

    public function testParseAgain()
    {
        $mt = new Type();
        $mt->parse('application/ogg;description=Hello there!;asd=fgh');
        $this->assertEquals(2, count($mt->parameters));

        $mt->parse('text/plain;hello=there!');
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
        $this->assertEquals(
            array(),
            Type::getParameters('text/plain')
        );
        //rest is tested in testParse()
    }

    public function testStripParameters()
    {
        $this->assertEquals(
            'text/plain',
            Type::stripParameters('text/plain')
        );
        $this->assertEquals(
            'text/plain',
            Type::stripParameters('text/plain;asd=def')
        );
        $this->assertEquals(
            'text/plain',
            Type::stripParameters('text/plain;asd=def;ghj=jkl')
        );
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
        $this->assertEquals(
            'def', Type::stripComments('(\)abc)def(\))', $comment)
        );
        $this->assertEquals(')abc )', $comment);
    }

    public function testStripCommentsEscapedString()
    {
        $comment = false;
        $this->assertEquals(
            'foo', Type::stripComments('\\foo(abc)', $comment)
        );
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
        $this->assertEquals(
            'def',
            Type::stripComments('(abc)def(ghi)', $comment)
        );
        $this->assertEquals('abc ghi', $comment);
    }

    public function testGetMedia()
    {
        $this->assertEquals('text', Type::getMedia('text/plain'));
        $this->assertEquals('application', Type::getMedia('application/ogg'));
        $this->assertEquals('*', Type::getMedia('*/*'));
    }

    public function testGetSubType()
    {
        $this->assertEquals('plain', Type::getSubType('text/plain'));
        $this->assertEquals('ogg', Type::getSubType('application/ogg'));
        $this->assertEquals('*', Type::getSubType('*/*'));
        $this->assertEquals('plain', Type::getSubType('text/plain;a=b'));
    }

    public function testGet()
    {
        $mt = new Type('text/xml');
        $this->assertEquals('text/xml', $mt->get());

        $mt = new Type('text/xml; this="is"; a="parameter" (with a comment)');
        $this->assertEquals(
            'text/xml; this="is"; a="parameter" (with a comment)',
            $mt->get()
        );
    }

    public function testIsExperimental()
    {
        $this->assertTrue(Type::isExperimental('text/x-test'));
        $this->assertTrue(Type::isExperimental('image/X-test'));
        $this->assertFalse(Type::isExperimental('text/plain'));
    }

    public function testIsVendor()
    {
        $this->assertTrue(Type::isVendor('application/vnd.openoffice'));
        $this->assertFalse(Type::isVendor('application/vendor.openoffice'));
        $this->assertFalse(Type::isVendor('vnd/fsck'));
    }

    public function testIsWildcard()
    {
        $this->assertTrue(Type::isWildcard('*/*'));
        $this->assertTrue(Type::isWildcard('image/*'));
        $this->assertFalse(Type::isWildcard('text/plain'));
    }

    public function testWildcardMatch() {
        $this->assertTrue(Type::wildcardMatch('*/*', 'image/png'));
        $this->assertTrue(Type::wildcardMatch('image/*', 'image/png'));
        $this->assertFalse(Type::wildcardMatch('image/*', 'text/plain'));
    }

    public function testWildcardMatchNoWildcard()
    {
        $this->assertFalse(Type::wildcardMatch('image/foo', 'image/png'));
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
        $this->assertEquals(
            'text/plain; charset="utf-8"', $type->get()
        );

        $type = new Type('text (Text) / plain ; charset = utf-8');
        $this->assertEquals(
            'text/plain; charset="utf-8"', $type->get()
        );

        $type = new Type('text / (Plain) plain ; charset = utf-8');
        $this->assertEquals(
            'text/plain; charset="utf-8"', $type->get()
        );

        $type = new Type('text / plain (Plain Text) ; charset = utf-8');
        $this->assertEquals(
            'text/plain; charset="utf-8"', $type->get()
        );

        $type = new Type('text / plain ; (Charset=utf-8) charset = utf-8');
        $this->assertEquals(
            'text/plain; charset="utf-8" (Charset=utf-8)', $type->get()
        );

        $type = new Type('text / plain ; charset (Charset) = utf-8');
        $this->assertEquals(
            'text/plain; charset="utf-8" (Charset)', $type->get()
        );

        $type = new Type('text / plain ; charset = (UTF8) utf-8');
        $this->assertEquals(
            'text/plain; charset="utf-8" (UTF8)', $type->get()
        );

        $type = new Type('text / plain ; charset = utf-8 (UTF-8 Plain Text)');
        $this->assertEquals(
            'text/plain; charset="utf-8" (UTF-8 Plain Text)', $type->get()
        );

        $type = new Type('application/x-foobar;description="bbgh(kdur"');
        $this->assertEquals(
            'application/x-foobar; description="bbgh(kdur"', $type->get()
        );

        $type = new Type('application/x-foobar;description="a \"quoted string\""');
        $this->assertEquals(
            'application/x-foobar; description="a \"quoted string\""', $type->get()
        );

    }
}
