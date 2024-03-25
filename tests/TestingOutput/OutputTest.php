<?php declare(strict_types=1);

namespace Test\TestingOutput;

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    public function testExpectFooActualFooPrint(): void
    {
        $this->expectOutputString('foo');

        print 'foo';
    }

    public function testExpectFooActualFooEcho(): void
    {
        $this->expectOutputString('foo');

        echo 'foo';
    }

    public function testExpectRegexOutput(): void
    {
        $this->expectOutputRegex('/[a-z]+/');

        print 'word';
    }
}