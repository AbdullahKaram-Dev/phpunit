<?php declare(strict_types=1);

namespace SkippingTests\SkippingTestsUsingAttributes;

use PHPUnit\Framework\Attributes\RequiresPhpExtension;
use PHPUnit\Framework\TestCase;

final class RequiresPhpExtensionTest extends TestCase
{
    #[RequiresPhpExtension('mysqli')]
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

}