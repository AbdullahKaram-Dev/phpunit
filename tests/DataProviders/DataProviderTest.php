<?php declare(strict_types=1);

namespace Test\DataProviders;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

class DataProviderTest extends TestCase
{
    public static function additionProvider(): array
    {
        return [
            [1]
        ];
    }

    #[DataProvider('additionProvider')]
    public function testSameNumberExternalProvider($numberProvider): void
    {
        $number = new class{
            public function number(): int
            {
                return 1;
            }
        };
        $this->assertSame($numberProvider, $number->number());
    }

    #[DataProviderExternal(NumberDataProvider::class, 'provideNumbers')]
    public function testSameNumberInternalProvider($numberProvider): void
    {
        $number = new class{
            public function number(): int
            {
                return 1;
            }
        };
        $this->assertSame($numberProvider, $number->number());
    }
}