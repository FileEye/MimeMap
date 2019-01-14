<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Type;
use FileEye\MimeMap\Parameter;
use PHPUnit\Framework\TestCase;

class TypeTest extends TestCase
{
    /**
     * Data provider for testParse.
     */
    public function parseProvider()
    {
        return [
            'application/ogg;description=Hello there!;asd=fgh' => [
                'application/ogg;description=Hello there!;asd=fgh',
                'application/ogg; description="Hello there!"; asd="fgh"',
                ['application', null],
                ['ogg', null],
                true,
                [
                  'description' => ['Hello there!', null],
                  'asd' => ['fgh', null],
                ],
            ],
            'text/plain' => [
                'text/plain',
                'text/plain',
                ['text', null],
                ['plain', null],
                false,
                [],
            ],
            'text/plain;a=b' => [
                'text/plain;a=b',
                'text/plain; a="b"',
                ['text', null],
                ['plain', null],
                true,
                [
                  'a' => ['b', null],
                ],
            ],
            'application/ogg' => [
                'application/ogg',
                'application/ogg',
                ['application', null],
                ['ogg', null],
                false,
                [],
            ],
            '*/*' => [
                '*/*',
                '*/*',
                ['*', null],
                ['*', null],
                false,
                [],
            ],
            'n/n' => [
                'n/n',
                'n/n',
                ['n', null],
                ['n', null],
                false,
                [],
            ],
            '(UTF-8 Plain Text) text / plain ; charset = utf-8' => [
                '(UTF-8 Plain Text) text / plain ; charset = utf-8',
                'text/plain; charset="utf-8"',
                ['text', 'UTF-8 Plain Text'],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', null],
                ],
            ],
            'text (Text) / plain ; charset = utf-8' => [
                'text (Text) / plain ; charset = utf-8',
                'text/plain; charset="utf-8"',
                ['text', 'Text'],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', null],
                ],
            ],
            'text / (Plain) plain ; charset = utf-8' => [
                'text / (Plain) plain ; charset = utf-8',
                'text/plain; charset="utf-8"',
                ['text', null],
                ['plain', 'Plain'],
                true,
                [
                  'charset' => ['utf-8', null],
                ],
            ],
            'text / plain (Plain Text) ; charset = utf-8' => [
                'text / plain (Plain Text) ; charset = utf-8',
                'text/plain; charset="utf-8"',
                ['text', null],
                ['plain', 'Plain Text'],
                true,
                [
                  'charset' => ['utf-8', null],
                ],
            ],
            'text / plain ; (Charset=utf-8) charset = utf-8' => [
                'text / plain ; (Charset=utf-8) charset = utf-8',
                'text/plain; charset="utf-8" (Charset=utf-8)',
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'Charset=utf-8'],
                ],
            ],
            'text / plain ; charset (Charset) = utf-8' => [
                'text / plain ; charset (Charset) = utf-8',
                'text/plain; charset="utf-8" (Charset)',
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'Charset'],
                ],
            ],
            'text / plain ; charset = (UTF8) utf-8' => [
                'text / plain ; charset = (UTF8) utf-8',
                'text/plain; charset="utf-8" (UTF8)',
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'UTF8'],
                ],
            ],
            'text / plain ; charset = utf-8 (UTF-8 Plain Text)' => [
                'text / plain ; charset = utf-8 (UTF-8 Plain Text)',
                'text/plain; charset="utf-8" (UTF-8 Plain Text)',
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'UTF-8 Plain Text'],
                ],
            ],
            'application/x-foobar;description="bbgh(kdur"' => [
                'application/x-foobar;description="bbgh(kdur"',
                'application/x-foobar; description="bbgh(kdur"',
                ['application', null],
                ['x-foobar', null],
                true,
                [
                  'description' => ['bbgh(kdur', null],
                ],
            ],
            'application/x-foobar;description="a \"quoted string\""' => [
                'application/x-foobar;description="a \"quoted string\""',
                'application/x-foobar; description="a \"quoted string\""',
                ['application', null],
                ['x-foobar', null],
                true,
                [
                  'description' => ['a "quoted string"', null],
                ],
            ],
            'text/xml;description=test' => [
                'text/xml;description=test',
                'text/xml; description="test"',
                ['text', null],
                ['xml', null],
                true,
                [
                  'description' => ['test', null],
                ],
            ],
            'text/xml;one=test;two=three' => [
                'text/xml;one=test;two=three',
                'text/xml; one="test"; two="three"',
                ['text', null],
                ['xml', null],
                true,
                [
                  'one' => ['test', null],
                  'two' => ['three', null],
                ],
            ],
            'text/xml; this="is"; a="parameter" (with a comment)' => [
                'text/xml; this="is"; a="parameter" (with a comment)',
                'text/xml; this="is"; a="parameter" (with a comment)',
                ['text', null],
                ['xml', null],
                true,
                [
                  'this' => ['is', null],
                  'a' => ['parameter', 'with a comment'],
                ],
            ],
            // Various edge cases.
            'text/plain; charset="utf-8" (UTF\\/8)' => [
                'text/plain; charset="utf-8" (UTF\\/8)',
                'text/plain; charset="utf-8" (UTF\\/8)',
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'UTF/8'],
                ],
            ],
            'appf/xml; a=b; b="parameter" (with\\; a comment)   ;c=d;  e=f (\\;) ;   g=h   ' => [
                'appf/xml; a=b; b="parameter" (with\\; a comment)   ;c=d;  e=f (\\;) ;   g=h   ',
                'appf/xml; a="b"; b="parameter" (with\\; a comment); c="d"; e="f" (\\;); g="h"',
                ['appf', null],
                ['xml', null],
                true,
                [
                  'a' => ['b', null],
                  'b' => ['parameter', 'with; a comment'],
                  'c' => ['d', null],
                  'e' => ['f', ';'],
                  'g' => ['h', null],
                ],
            ],
            'text/(abc)def(ghi)' => [
                'text/(abc)def(ghi)',
                'text/def',
                ['text', null],
                ['def', 'abc ghi'],
                false,
                [],
            ],
            'text/(abc)def' => [
                'text/(abc)def',
                'text/def',
                ['text', null],
                ['def', 'abc'],
                false,
                [],
            ],
            'text/def(ghi)' => [
                'text/def(ghi)',
                'text/def',
                ['text', null],
                ['def', 'ghi'],
                false,
                [],
            ],
            'text/(\)abc)def(\))' => [
                'text/(\)abc)def(\))',
                'text/def (\)abc \))',
                ['text', null],
                ['def', ')abc )'],
                false,
                [],
            ],
            'text/\\foo(abc)' => [
                'text/\\foo(abc)',
                'text/foo (abc)',
                ['text', null],
                ['foo', 'abc'],
                false,
                [],
            ],
            'text/(a"bc)def")def' => [
                'text/(a"bc)def")def',
                'text/def (a"bc)def")',
                ['text', null],
                ['def', 'a"bc)def"'],
                false,
                [],
            ],
            'text/"(abc)def"' => [
                'text/"(abc)def"',
                'text/???")',
                ['text', null],
                ['def', '???'],
                false,
                [],
            ],
        ];
    }

    /**
     * @dataProvider parseProvider
     */
    public function testParse($type, $expectedToString, array $expectedMedia, array $expectedSubType, $expectedHasParameters, array $expectedParameters)
    {
        $mt = new Type($type);
        $this->assertSame($expectedToString, $mt->toString());
        $this->assertSame($expectedMedia[0], $mt->getMedia());
        $this->assertSame($expectedMedia[1], $mt->getMediaComment());
        $this->assertSame($expectedSubType[0], $mt->getSubType());
        $this->assertSame($expectedSubType[1], $mt->getSubTypeComment());
        $this->assertSame($expectedHasParameters, $mt->hasParameters());
        $this->assertCount(count($expectedParameters), $mt->getParameters());
        foreach ($expectedParameters as $name => $param) {
            $this->assertTrue(isset($mt->getParameters()[$name]));
            $this->assertInstanceOf('FileEye\MimeMap\TypeParameter', $mt->getParameter($name));
            $this->assertSame($name, $mt->getParameter($name)->getName());
            $this->assertSame($param[0], $mt->getParameter($name)->getValue());
            $this->assertSame($param[1], $mt->getParameter($name)->getComment());
        }
    }

    /**
     * Data provider for testParseMalformed.
     */
    public function parseMalformedProvider()
    {
        return [
            'null' => [null],
            'empty string' => [''],
            'n' => ['n'],
            'no media' => ['/n'],
            'no sub type' => ['n/'],
        ];
    }

    /**
     * @dataProvider parseMalformedProvider
     * @expectedException \FileEye\MimeMap\MalformedTypeException
     */
    public function testParseMalformed($type)
    {
        $mt = new Type($type);
    }

    public function testParseAgain()
    {
        $mt = new Type('application/ogg;description=Hello there!;asd=fgh');
        $this->assertCount(2, $mt->getParameters());

        $mt = new Type('text/plain;hello=there!');
        $this->assertCount(1, $mt->getParameters());
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
        $this->assertSame('image/png; foo="bar"; baz="val" (this is a comment)', $res);
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
        $this->assertSame('image/png; baz="val" (this is a comment)', $res);
    }

    public function testGetDefaultExtension()
    {
        $this->assertEquals('atom', (new Type('application/atom+xml'))->getDefaultExtension());
        $this->assertEquals('csv', (new Type('text/csv'))->getDefaultExtension());
    }

    /**
     * Data provider for testGetDefaultExtensionFail.
     */
    public function getDefaultExtensionFailProvider()
    {
        return [
            ['n/n'],
        ];
    }

    /**
     * @expectedException RuntimeException
     * @dataProvider getDefaultExtensionFailProvider
     */
    public function testGetDefaultExtensionFail($type)
    {
        $this->assertNull((new Type($type))->getDefaultExtension());
    }
}
