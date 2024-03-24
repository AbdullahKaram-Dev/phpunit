<?php declare(strict_types=1);

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
        new \App\Classes\InvalidArgumentException();
    }
}