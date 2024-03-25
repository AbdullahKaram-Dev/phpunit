<?php declare(strict_types=1);

namespace Test\IncompleteTests;

use PHPUnit\Framework\TestCase;

final class WorkInProgressTest extends TestCase
{
    public function testSomething(): void
    {
        // Optional: Test anything here, if you want.
        $this->assertTrue(true, message: 'This should already work.');

        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.',
        );
    }
}