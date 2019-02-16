<?php

namespace FileEye\MimeMap\Test;

// PHPUnit compatibility trait for PHPUnit 7.
trait Phpunit7CompatibilityTrait
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

    public function bcSetExpectedException($exceptionName, $exceptionMessage = '', $exceptionCode = null)
    {
        parent::expectException($exceptionName);
        if ($exceptionMessage) {
            parent::expectExceptionMessage($exceptionMessage);
        }
        if ($exceptionCode !== null) {
            parent::expectExceptionCode($exceptionCode);
        }
    }
}
