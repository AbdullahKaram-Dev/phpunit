<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new \App\Classes\Greeter();

        $this->assertSame('Hello, abdullah!',$greeter->greet('abdullah'));
    }
}