<?php declare(strict_types=1);

namespace Test\SkippingTests;

use PHPUnit\Framework\Attributes\RequiresPhpExtension;
use PHPUnit\Framework\TestCase;

// #[RequiresPhpExtension('pgsql')]
class DatabaseTest extends TestCase
{
    protected function setUp(): void
    {
        // Skip this test if the PostgreSQL extension is not available.
        if (!extension_loaded('pgsql')) {
            $this->markTestSkipped(
                'The PostgreSQL extension is not available',
            );
        }
    }

    public function testConnection(): void
    {
        // ...
    }

}