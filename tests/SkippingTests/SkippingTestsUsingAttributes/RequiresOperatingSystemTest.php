<?php declare(strict_types=1);

namespace SkippingTests\SkippingTestsUsingAttributes;

use PHPUnit\Framework\Attributes\RequiresOperatingSystem;
use PHPUnit\Framework\TestCase;

final class RequiresOperatingSystemTest extends TestCase
{
    #[RequiresOperatingSystem('[Windows]')]
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

}