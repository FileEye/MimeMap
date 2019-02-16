<?php

namespace FileEye\MimeMap\test;

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
}
