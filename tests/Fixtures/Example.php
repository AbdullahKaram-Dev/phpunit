<?php declare(strict_types=1);

namespace Test\Fixtures;

class Example
{
    public function __construct(protected Collaborator $collaborator)
    {
    }

    public function doSomething(): string
    {
        return 'the-result';
    }
}