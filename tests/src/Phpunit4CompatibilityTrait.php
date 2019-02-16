<?php

namespace FileEye\MimeMap\Test;

// PHPUnit compatibility trait for PHPUnit 4.
trait Phpunit4CompatibilityTrait
{
    public function setUp()
    {
        parent::setUp();
        if (method_exists($this, 'fcSetUp')) {
            $this->fcSetUp();
        }
    }

    public function tearDown()
    {
        if (method_exists($this, 'fcTearDown')) {
            $this->fcTearDown();
        }
        parent::tearDown();
    }

    public function expectException($exception)
    {
        if (method_exists(parent, 'expectException')) {
            parent::expectException($exception);
        } else {
            parent::setExpectedException($exception);
        }
    }

    public function assertStringContainsString($needle, $haystack, $message = '')
    {
        parent::assertContains($needle, $haystack, $message);
    }

    public function assertStringNotContainsString($needle, $haystack, $message = '')
    {
        parent::assertNotContains($needle, $haystack, $message);
    }
}
