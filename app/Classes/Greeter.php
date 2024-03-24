<?php declare(strict_types=1);

namespace app\Classes;

final class Greeter
{
    public function greet(string $name): string
    {
        return 'Hello, ' . $name . '!';
    }
}