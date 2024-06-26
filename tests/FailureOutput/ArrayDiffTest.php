<?php declare(strict_types=1);

namespace Test\FailureOutput;

use PHPUnit\Framework\TestCase;

final class ArrayDiffTest extends TestCase
{
    public function testEquality(): void
    {
        $this->assertSame(
            [1, 2,  3, 4, 5, 6],
            [1, 2, 3, 4, 5, 6],
        );
    }
}