<?php declare(strict_types=1);

namespace SkippingTests\SkippingTestsUsingAttributes;

use PHPUnit\Framework\Attributes\RequiresMethod;
use PHPUnit\Framework\TestCase;

final class RequireMethodTest extends TestCase
{
    #[RequiresMethod(RequireMethodTest::class, 'nonExistentMethod')]
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

    /*public function nonExistentMethod(): void
    {
    }*/
}