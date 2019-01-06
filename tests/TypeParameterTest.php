<?php

namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Type;
use FileEye\MimeMap\TypeParameter;
use PHPUnit\Framework\TestCase;

class TypeParameterTest extends TestCase
{
    public function testHasComment()
    {
        $this->assertTrue(
            TypeParameter::hasComment(
                'a="parameter" (with a comment)'
            )
        );
        $this->assertTrue(
            TypeParameter::hasComment(
                'param=foo(with a comment)'
            )
        );
    }

    public function testHasCommentNegative()
    {
        $this->assertFalse(
            TypeParameter::hasComment(
                'a="parameter"'
            )
        );
        $this->assertFalse(
            TypeParameter::hasComment(
                'foo=bar'
            )
        );
    }

    public function testGetComment()
    {
        $this->assertEquals(
            'with a comment',
            TypeParameter::getComment(
                'a="parameter" (with a comment)'
            )
        );
    }

    public function testGetCommentNone()
    {
        $this->assertEquals(
            '',
            TypeParameter::getComment(
                'a="parameter"'
            )
        );
    }
}
