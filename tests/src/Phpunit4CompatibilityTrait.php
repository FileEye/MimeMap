<?php

namespace FileEye\MimeMap\Test;

// PHPUnit compatibility trait for PHPUnit 4.
trait Phpunit4CompatibilityTrait
{
    /**
     * Checks if the trait is used in a class that has a method.
     *
     * @param string $method
     *   Method to check.
     *
     * @return bool
     *   TRUE if the method is supported, FALSE if not.
     */
    private function supports($method)
    {
        // Get the parent class of the currently running test class.
        $parent = get_parent_class($this);
        // Ensure that the method_exists() check on the createMock method is carried
        // out on the first parent of $this that does not have access to this
        // trait's methods. This is because the trait also has a method called
        // createMock(). Most often the check will be made on
        // \PHPUnit\Framework\TestCase.
        while (method_exists($parent, 'supports')) {
            $parent = get_parent_class($parent);
        }
        return method_exists($parent, $method);
    }

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
        if ($this->supports('expectException')) {
            parent::expectException($exceptionName);
            if ($exceptionMessage) {
                parent::expectExceptionMessage($exceptionMessage);
            }
            if ($exceptionCode !== null) {
                parent::expectExceptionCode($exceptionCode);
            }
        } else {
            parent::setExpectedException($exceptionName, $exceptionMessage, $exceptionCode);
        }
    }

    public function expectException($exception)
    {
        if ($this->supports('expectException')) {
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
