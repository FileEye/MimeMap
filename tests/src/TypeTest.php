<?php

namespace FileEye\MimeMap\Test;

use FileEye\MimeMap\Type;

class TypeTest extends MimeMapTestBase
{
    /**
     * Data provider for testParse.
     */
    public function parseProvider()
    {
        return [
            'application/ogg;description=Hello there!;asd=fgh' => [
                'application/ogg;description=Hello there!;asd=fgh',
                [
                  'application/ogg',
                  'application/ogg; description="Hello there!"; asd="fgh"',
                  'application/ogg; description="Hello there!"; asd="fgh"',
                ],
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
                [
                  'text/plain',
                  'text/plain',
                  'text/plain',
                ],
                ['text', null],
                ['plain', null],
                false,
                [],
            ],
            'text/plain;a=b' => [
                'text/plain;a=b',
                [
                  'text/plain',
                  'text/plain; a="b"',
                  'text/plain; a="b"',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'a' => ['b', null],
                ],
            ],
            'application/ogg' => [
                'application/ogg',
                [
                  'application/ogg',
                  'application/ogg',
                  'application/ogg',
                ],
                ['application', null],
                ['ogg', null],
                false,
                [],
            ],
            '*/*' => [
                '*/*',
                [
                  '*/*',
                  '*/*',
                  '*/*',
                ],
                ['*', null],
                ['*', null],
                false,
                [],
            ],
            'n/n' => [
                'n/n',
                [
                  'n/n',
                  'n/n',
                  'n/n',
                ],
                ['n', null],
                ['n', null],
                false,
                [],
            ],
            '(UTF-8 Plain Text) text / plain ; charset = utf-8' => [
                '(UTF-8 Plain Text) text / plain ; charset = utf-8',
                [
                  'text/plain',
                  'text/plain; charset="utf-8"',
                  'text (UTF-8 Plain Text)/plain; charset="utf-8"',
                ],
                ['text', 'UTF-8 Plain Text'],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', null],
                ],
            ],
            'text (Text) / plain ; charset = utf-8' => [
                'text (Text) / plain ; charset = utf-8',
                [
                  'text/plain',
                  'text/plain; charset="utf-8"',
                  'text (Text)/plain; charset="utf-8"',
                ],
                ['text', 'Text'],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', null],
                ],
            ],
            'text / (Plain) plain ; charset = utf-8' => [
                'text / (Plain) plain ; charset = utf-8',
                [
                  'text/plain',
                  'text/plain; charset="utf-8"',
                  'text/plain (Plain); charset="utf-8"',
                ],
                ['text', null],
                ['plain', 'Plain'],
                true,
                [
                  'charset' => ['utf-8', null],
                ],
            ],
            'text / plain (Plain Text) ; charset = utf-8' => [
                'text / plain (Plain Text) ; charset = utf-8',
                [
                  'text/plain',
                  'text/plain; charset="utf-8"',
                  'text/plain (Plain Text); charset="utf-8"',
                ],
                ['text', null],
                ['plain', 'Plain Text'],
                true,
                [
                  'charset' => ['utf-8', null],
                ],
            ],
            'text / plain ; (Charset=utf-8) charset = utf-8' => [
                'text / plain ; (Charset=utf-8) charset = utf-8',
                [
                  'text/plain',
                  'text/plain; charset="utf-8"',
                  'text/plain; charset="utf-8" (Charset=utf-8)',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'Charset=utf-8'],
                ],
            ],
            'text / plain ; charset (Charset) = utf-8' => [
                'text / plain ; charset (Charset) = utf-8',
                [
                  'text/plain',
                  'text/plain; charset="utf-8"',
                  'text/plain; charset="utf-8" (Charset)',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'Charset'],
                ],
            ],
            'text / plain ; charset = (UTF8) utf-8' => [
                'text / plain ; charset = (UTF8) utf-8',
                [
                  'text/plain',
                  'text/plain; charset="utf-8"',
                  'text/plain; charset="utf-8" (UTF8)',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'UTF8'],
                ],
            ],
            'text / plain ; charset = utf-8 (UTF-8 Plain Text)' => [
                'text / plain ; charset = utf-8 (UTF-8 Plain Text)',
                [
                  'text/plain',
                  'text/plain; charset="utf-8"',
                  'text/plain; charset="utf-8" (UTF-8 Plain Text)',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'UTF-8 Plain Text'],
                ],
            ],
            'application/x-foobar;description="bbgh(kdur"' => [
                'application/x-foobar;description="bbgh(kdur"',
                [
                  'application/x-foobar',
                  'application/x-foobar; description="bbgh(kdur"',
                  'application/x-foobar; description="bbgh(kdur"',
                ],
                ['application', null],
                ['x-foobar', null],
                true,
                [
                  'description' => ['bbgh(kdur', null],
                ],
            ],
            'application/x-foobar;description="a \"quoted string\""' => [
                'application/x-foobar;description="a \"quoted string\""',
                [
                  'application/x-foobar',
                  'application/x-foobar; description="a \"quoted string\""',
                  'application/x-foobar; description="a \"quoted string\""',
                ],
                ['application', null],
                ['x-foobar', null],
                true,
                [
                  'description' => ['a "quoted string"', null],
                ],
            ],
            'text/xml;description=test' => [
                'text/xml;description=test',
                [
                  'text/xml',
                  'text/xml; description="test"',
                  'text/xml; description="test"',
                ],
                ['text', null],
                ['xml', null],
                true,
                [
                  'description' => ['test', null],
                ],
            ],
            'text/xml;one=test;two=three' => [
                'text/xml;one=test;two=three',
                [
                  'text/xml',
                  'text/xml; one="test"; two="three"',
                  'text/xml; one="test"; two="three"',
                ],
                ['text', null],
                ['xml', null],
                true,
                [
                  'one' => ['test', null],
                  'two' => ['three', null],
                ],
            ],
            'text/xml;one="test";two="three"' => [
                'text/xml;one="test";two="three"',
                [
                  'text/xml',
                  'text/xml; one="test"; two="three"',
                  'text/xml; one="test"; two="three"',
                ],
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
                [
                  'text/xml',
                  'text/xml; this="is"; a="parameter"',
                  'text/xml; this="is"; a="parameter" (with a comment)',
                ],
                ['text', null],
                ['xml', null],
                true,
                [
                  'this' => ['is', null],
                  'a' => ['parameter', 'with a comment'],
                ],
            ],
            // Various edge cases.
            'null' => [
                null,
                [
                  null,
                  null,
                  null,
                ],
                [null, null],
                [null, null],
                false,
                [],
            ],
            'text/plain; charset="utf-8" (UTF/8)' => [
                'text/plain; charset="utf-8" (UTF/8)',
                [
                  'text/plain',
                  'text/plain; charset="utf-8"',
                  'text/plain; charset="utf-8" (UTF/8)',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'charset' => ['utf-8', 'UTF/8'],
                ],
            ],
            'appf/xml; a=b; b="parameter" (with; a comment)   ;c=d;  e=f (;) ;   g=h   ' => [
                'appf/xml; a=b; b="parameter" (with; a comment)   ;c=d;  e=f (;) ;   g=h   ',
                [
                  'appf/xml',
                  'appf/xml; a="b"; b="parameter"; c="d"; e="f"; g="h"',
                  'appf/xml; a="b"; b="parameter" (with; a comment); c="d"; e="f" (;); g="h"',
                ],
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
                [
                  'text/def',
                  'text/def',
                  'text/def (abc ghi)',
                ],
                ['text', null],
                ['def', 'abc ghi'],
                false,
                [],
            ],
            'text/(abc)def' => [
                'text/(abc)def',
                [
                  'text/def',
                  'text/def',
                  'text/def (abc)',
                ],
                ['text', null],
                ['def', 'abc'],
                false,
                [],
            ],
            'text/def(ghi)' => [
                'text/def(ghi)',
                [
                  'text/def',
                  'text/def',
                  'text/def (ghi)',
                ],
                ['text', null],
                ['def', 'ghi'],
                false,
                [],
            ],
            'text/plain;a=(\)abc)def(\()' => [
                'text/plain;a=(\)abc)def(\()',
                [
                  'text/plain',
                  'text/plain; a="def"',
                  'text/plain; a="def" (\)abc \()',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'a' => ['def', '\)abc \('],
                ],
            ],
            'text/plain;a=\\foo(abc)' => [
                'text/plain;a=\\foo(abc)',
                [
                  'text/plain',
                  'text/plain; a="foo"',
                  'text/plain; a="foo" (abc)',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'a' => ['foo', 'abc'],
                ],
            ],
            'text/plain;a=(a"bc\)def")def' => [
                'text/plain;a=(a"bc\)def")def',
                [
                  'text/plain',
                  'text/plain; a="def"',
                  'text/plain; a="def" (a"bc\)def")',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'a' => ['def', 'a"bc\)def"'],
                ],
            ],
            'text/plain;a="(abc)def"' => [
                'text/plain;a="(abc)def"',
                [
                  'text/plain',
                  'text/plain; a="(abc)def"',
                  'text/plain; a="(abc)def"',
                ],
                ['text', null],
                ['plain', null],
                true,
                [
                  'a' => ['(abc)def', null],
                ],
            ],
        ];
    }

    /**
     * @dataProvider parseProvider
     */
    public function testParse($type, array $expectedToString, array $expectedMedia, array $expectedSubType, $expectedHasParameters, array $expectedParameters)
    {
        $mt = new Type($type);
        $this->assertSame($expectedMedia[0], $mt->getMedia());
        $this->assertSame($expectedMedia[1], $mt->getMediaComment());
        $this->assertSame($expectedSubType[0], $mt->getSubType());
        $this->assertSame($expectedSubType[1], $mt->getSubTypeComment());
        $this->assertSame($expectedHasParameters, $mt->hasParameters());
        $this->assertSame(count($expectedParameters), count($mt->getParameters()));
        foreach ($expectedParameters as $name => $param) {
            $this->assertTrue(isset($mt->getParameters()[$name]));
            $this->assertInstanceOf('FileEye\MimeMap\TypeParameter', $mt->getParameter($name));
            $this->assertSame($name, $mt->getParameter($name)->getName());
            $this->assertSame($param[0], $mt->getParameter($name)->getValue());
            $this->assertSame($param[1], $mt->getParameter($name)->getComment());
        }
        $this->assertSame($expectedToString[0], $mt->toString(Type::SHORT_TEXT));
        $this->assertSame($expectedToString[1], $mt->toString(Type::FULL_TEXT));
        $this->assertSame($expectedToString[2], $mt->toString(Type::FULL_TEXT_WITH_COMMENTS));
    }

    /**
     * Data provider for testParseMalformed.
     */
    public function parseMalformedProvider()
    {
        return [
            'empty string' => [''],
            'n' => ['n'],
            'no media' => ['/n'],
            'no sub type' => ['n/'],
            'no comment closing bracket a' => ['image (open ()/*'],
            'no comment closing bracket b' => ['image / * (open (())'],
        ];
    }

    /**
     * @dataProvider parseMalformedProvider
     */
    public function testParseMalformed($type)
    {
        $this->expectException('FileEye\MimeMap\MalformedTypeException');
        new Type($type);
    }

    public function testParseAgain()
    {
        $mt = new Type('application/ogg;description=Hello there!;asd=fgh');
        $this->assertSame(2, count($mt->getParameters()));

        $mt = new Type('text/plain;hello=there!');
        $this->assertSame(1, count($mt->getParameters()));
    }

    public function testGetDescription()
    {
        $this->assertNull((new Type('*/*'))->getDescription());
        $this->assertNull((new Type('image/*'))->getDescription());
        $this->assertNull((new Type('application/java*'))->getDescription());
        $this->assertNull((new Type('application/x-t3vm-image'))->getDescription());
        $this->assertSame('HTML document', (new Type('text/html'))->getDescription());
        $this->assertSame('HTML document, HTML: HyperText Markup Language', (new Type('text/html'))->getDescription(true));

        $this->assertSame('GPX geographic data', (new Type('application/gpx+xml'))->getDescription());
        $this->assertSame('GPX geographic data, GPX: GPS Exchange Format', (new Type('application/gpx+xml'))->getDescription(true));
        $this->assertSame('GPX geographic data', (new Type('application/gpx'))->getDescription());
        $this->assertSame('GPX geographic data, GPX: GPS Exchange Format', (new Type('application/gpx'))->getDescription(true));
        $this->assertSame('GPX geographic data', (new Type('application/x-gpx'))->getDescription());
        $this->assertSame('GPX geographic data, GPX: GPS Exchange Format', (new Type('application/x-gpx'))->getDescription(true));
    }

    public function testSetComment()
    {
        $type = new Type('text/x-test');
        $type->setMediaComment('media comment');
        $this->assertSame('text (media comment)/x-test', $type->toString(Type::FULL_TEXT_WITH_COMMENTS));
        $type->setSubTypeComment('subtype comment');
        $this->assertSame('text (media comment)/x-test (subtype comment)', $type->toString(Type::FULL_TEXT_WITH_COMMENTS));
        $type->setMediaComment(null);
        $this->assertSame('text/x-test (subtype comment)', $type->toString(Type::FULL_TEXT_WITH_COMMENTS));
        $type->setSubTypeComment(null);
        $this->assertSame('text/x-test', $type->toString(Type::FULL_TEXT_WITH_COMMENTS));
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

        $this->assertTrue((new Type('application/java*'))->isWildcard());
        $this->assertTrue((new Type('application/java-*'))->isWildcard());
    }

    public function testIsAlias()
    {
        $this->assertFalse((new Type('*/*'))->isAlias());
        $this->assertFalse((new Type('image/*'))->isAlias());
        $this->assertFalse((new Type('text/plain'))->isAlias());
        $this->assertFalse((new Type('application/java*'))->isAlias());
        $this->assertTrue((new Type('text/x-markdown'))->isAlias());
    }

    public function testWildcardMatch()
    {
        $this->assertTrue((new Type('image/png'))->wildcardMatch('*/*'));
        $this->assertTrue((new Type('image/png'))->wildcardMatch('image/*'));
        $this->assertFalse((new Type('text/plain'))->wildcardMatch('image/*'));
        $this->assertFalse((new Type('image/png'))->wildcardMatch('image/foo'));

        $this->assertTrue((new Type('application/javascript'))->wildcardMatch('application/java*'));
        $this->assertTrue((new Type('application/java-serialized-object'))->wildcardMatch('application/java-*'));
        $this->assertFalse((new Type('application/javascript'))->wildcardMatch('application/java-*'));
    }

    public function testAddParameter()
    {
        $mt = new Type('image/png; foo=bar');
        $mt->addParameter('baz', 'val', 'this is a comment');
        $res = $mt->toString(Type::FULL_TEXT_WITH_COMMENTS);
        $this->assertStringContainsString('foo=', $res);
        $this->assertStringContainsString('bar', $res);
        $this->assertStringContainsString('baz=', $res);
        $this->assertStringContainsString('val', $res);
        $this->assertStringContainsString('(this is a comment)', $res);
        $this->assertSame('image/png; foo="bar"; baz="val" (this is a comment)', $res);
    }

    public function testRemoveParameter()
    {
        $mt = new Type('image/png; foo=bar;baz=val(this is a comment)');
        $mt->removeParameter('foo');
        $res = $mt->toString(Type::FULL_TEXT_WITH_COMMENTS);
        $this->assertStringNotContainsString('foo=', $res);
        $this->assertStringNotContainsString('bar', $res);
        $this->assertStringContainsString('baz=', $res);
        $this->assertSame('image/png; baz="val" (this is a comment)', $res);
    }

    public function testGetAliases()
    {
        $this->assertSame(['image/x-wmf', 'image/x-win-metafile', 'application/x-wmf', 'application/wmf', 'application/x-msmetafile'], (new Type('image/wmf'))->getAliases());
        $this->assertSame([], (new Type('foo/bar'))->getAliases(false));
        $this->assertSame([], (new Type('image/x-wmf'))->getAliases(false));
    }

    public function testGetAliasesOnAliasStrict()
    {
        $this->bcSetExpectedException('FileEye\MimeMap\MappingException', "Cannot get aliases for 'image/x-wmf', it is an alias itself");
        $this->assertSame([], (new Type('image/x-wmf'))->getAliases());
    }

    public function testGetAliasesOnMissingTypeStrict()
    {
        $this->bcSetExpectedException('FileEye\MimeMap\MappingException', "No MIME type found for foo/bar in map");
        $this->assertSame([], (new Type('foo/bar'))->getAliases());
    }

    public function testGetExtensions()
    {
        $this->assertEquals(['atom'], (new Type('application/atom+xml'))->getExtensions());
        $this->assertEquals(['ser', 'js', 'jsm', 'mjs'], (new Type('application/java*'))->getExtensions());
        $this->assertEquals(['ser'], (new Type('application/java-*'))->getExtensions());
        $this->assertEquals([], (new Type('application/a000'))->getExtensions(false));
        $this->assertEquals([], (new Type('application/a000-*'))->getExtensions(false));

        $this->assertSame(['smi', 'smil', 'sml', 'kino'], (new Type('application/smil+xml'))->getExtensions());
        $this->assertSame(['smi', 'smil', 'sml', 'kino'], (new Type('application/smil'))->getExtensions());
    }

    public function testGetExtensionsFail()
    {
        $this->expectException('FileEye\MimeMap\MappingException');
        $this->assertEquals([], (new Type('application/a000'))->getExtensions());
    }

    public function testGetDefaultExtension()
    {
        $this->assertEquals('atom', (new Type('application/atom+xml'))->getDefaultExtension());
        $this->assertEquals('csv', (new Type('text/csv'))->getDefaultExtension());

        $this->assertSame('smi', (new Type('application/smil+xml'))->getDefaultExtension());
        $this->assertSame('smi', (new Type('application/smil'))->getDefaultExtension());
    }

    /**
     * Data provider for testGetDefaultExtensionFail.
     */
    public function getDefaultExtensionFailProvider()
    {
        return [
            ['*/*'],
            ['n/n'],
            ['image/*'],
            ['application/java*'],
        ];
    }

    /**
     * @dataProvider getDefaultExtensionFailProvider
     */
    public function testGetDefaultExtensionFail($type)
    {
        $this->expectException('FileEye\MimeMap\MappingException');
        $this->assertNull((new Type($type))->getDefaultExtension());
    }
}
