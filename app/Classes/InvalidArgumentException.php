<?php declare(strict_types=1);

namespace App\Classes;

class InvalidArgumentException
{
    public function __construct()
    {
        throw new \InvalidArgumentException();
    }
}