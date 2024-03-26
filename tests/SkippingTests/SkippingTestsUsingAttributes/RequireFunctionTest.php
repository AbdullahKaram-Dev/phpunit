<?php declare(strict_types=1);

namespace SkippingTests\SkippingTestsUsingAttributes;

use PHPUnit\Framework\Attributes\RequiresFunction;
use PHPUnit\Framework\TestCase;

final class RequireFunctionTest extends TestCase
{
    #[RequiresFunction('nonExistentFunction')]
    public function testOne(): void
    {
        $this->assertTrue(true);
    }


    /*public function nonExistentFunction(): void
    {
    }*/
}