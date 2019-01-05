<?php
namespace FileEye\MimeMap\test;

use FileEye\MimeMap\Type\Parameter;
use PHPUnit\Framework\TestCase;

class ParameterTest extends TestCase
{
    public function testHasComment()
    {
        $this->assertTrue(
            MIME_Type_Parameter::hasComment(
                'a="parameter" (with a comment)'
            )
        );
        $this->assertTrue(
            MIME_Type_Parameter::hasComment(
                'param=foo(with a comment)'
            )
        );
    }

    public function testHasCommentNegative()
    {
        $this->assertFalse(
            MIME_Type_Parameter::hasComment(
                'a="parameter"'
            )
        );
        $this->assertFalse(
            MIME_Type_Parameter::hasComment(
                'foo=bar'
            )
        );
    }

    public function testGetComment()
    {
        $this->assertEquals(
            'with a comment',
            MIME_Type_Parameter::getComment(
                'a="parameter" (with a comment)'
            )
        );
    }

    public function testGetCommentNone()
    {
        $this->assertEquals(
            '',
            MIME_Type_Parameter::getComment(
                'a="parameter"'
            )
        );
    }
}
