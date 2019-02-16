<?php

namespace FileEye\MimeMap\Test;

// PHPUnit compatibility trait for PHPUnit 8.
trait Phpunit8CompatibilityTrait
{
    public function setUp(): void
    {
        parent::setUp();
        if (method_exists($this, 'fcSetUp')) {
            $this->fcSetUp();
        }
    }

    public function tearDown(): void
    {
        if (method_exists($this, 'fcTearDown')) {
            $this->fcTearDown();
        }
        parent::tearDown();
    }

/*    public function fcAssertContains(string $needle, string $haystack, string $message = '', bool $ignoreCase = false)
    {
        if ($ignoreCase) {
            parent::assertStringContainsStringIgnoringCase($needle, $haystack, $message);
        } else {
            parent::assertStringContainsString($needle, $haystack, $message);
        }
    }*/
}
