<?php
namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Type;
use FileEye\MimeMap\Type\Parameter;
use PHPUnit\Framework\TestCase;

class ParameterTest extends TestCase
{
    public function testHasComment()
    {
        $this->assertTrue(
            Parameter::hasComment(
                'a="parameter" (with a comment)'
            )
        );
        $this->assertTrue(
            Parameter::hasComment(
                'param=foo(with a comment)'
            )
        );
    }

    public function testHasCommentNegative()
    {
        $this->assertFalse(
            Parameter::hasComment(
                'a="parameter"'
            )
        );
        $this->assertFalse(
            Parameter::hasComment(
                'foo=bar'
            )
        );
    }

    public function testGetComment()
    {
        $this->assertEquals(
            'with a comment',
            Parameter::getComment(
                'a="parameter" (with a comment)'
            )
        );
    }

    public function testGetCommentNone()
    {
        $this->assertEquals(
            '',
            Parameter::getComment(
                'a="parameter"'
            )
        );
    }
}
