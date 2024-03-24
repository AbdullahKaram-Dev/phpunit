<?php declare(strict_types=1);

namespace Test\ExpectingExceptions;

use PHPUnit\Framework\TestCase;

final class ExceptionTest extends TestCase
{
    public function testException(): void
    {
        /**
         * there is a bunch of ways to test exceptions
         * expectExceptionCode() expectExceptionMessage() expectExceptionMessageMatches()
         */
        $this->expectException(\InvalidArgumentException::class);
        new class{
            public function __construct()
            {
                throw new \InvalidArgumentException();
            }
        };
    }
}