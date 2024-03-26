<?php declare(strict_types=1);

namespace SkippingTests\SkippingTestsUsingAttributes;

use PHPUnit\Framework\Attributes\RequiresOperatingSystem;
use PHPUnit\Framework\Attributes\RequiresOperatingSystemFamily;
use PHPUnit\Framework\TestCase;

final class RequiresOperatingSystemFamilyTest extends TestCase
{
    #[RequiresOperatingSystemFamily('Windows')]
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

}