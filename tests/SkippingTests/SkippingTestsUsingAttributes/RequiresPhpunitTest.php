<?php declare(strict_types=1);

namespace SkippingTests\SkippingTestsUsingAttributes;

use PHPUnit\Framework\Attributes\RequiresPhpExtension;
use PHPUnit\Framework\Attributes\RequiresPhpunit;
use PHPUnit\Framework\TestCase;

final class RequiresPhpunitTest extends TestCase
{
    #[RequiresPhpunit('11')]
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

}