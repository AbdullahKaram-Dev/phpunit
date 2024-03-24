<?php declare(strict_types=1);

namespace Test\AssertingReturnValues;

use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new class {
            public function greet(string $name): string
            {
                return 'Hello, ' . $name . ' !';
            }
        };

        $this->assertSame('Hello, abdullah !',$greeter->greet('abdullah'));
    }
}