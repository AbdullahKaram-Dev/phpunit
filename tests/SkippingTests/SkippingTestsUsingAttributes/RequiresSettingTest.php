<?php declare(strict_types=1);

namespace SkippingTests\SkippingTestsUsingAttributes;

use PHPUnit\Framework\Attributes\RequiresSetting;
use PHPUnit\Framework\TestCase;

final class RequiresSettingTest extends TestCase
{
    #[RequiresSetting('bcmath.scale', '0')]
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

}