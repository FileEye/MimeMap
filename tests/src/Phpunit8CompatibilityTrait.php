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

    public function bcSetExpectedException($exceptionName, $exceptionMessage = '', $exceptionCode = NULL)
    {
        parent::expectException($exceptionName);
        parent::expectExceptionMessage($exceptionMessage);
        parent::expectExceptionCode($exceptionCode);
    }
}
