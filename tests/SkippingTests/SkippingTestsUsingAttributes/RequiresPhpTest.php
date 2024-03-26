<?php declare(strict_types=1);

namespace SkippingTests\SkippingTestsUsingAttributes;

use PHPUnit\Framework\Attributes\RequiresOperatingSystem;
use PHPUnit\Framework\Attributes\RequiresPhp;
use PHPUnit\Framework\TestCase;

final class RequiresPhpTest extends TestCase
{
    #[RequiresPhp('8.4')]
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

}