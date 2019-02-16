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

/*    public function fcAssertContains($needle, $haystack, $message = '', $ignoreCase = false)
    {
        parent::assertContains($needle, $haystack, $message, $ignoreCase);
    }*/
}
