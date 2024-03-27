<?php declare(strict_types=1);

namespace Test\Fixtures;

use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    private ?Example $example;

    public function testSomething(): void
    {
        $this->assertSame(
            'the-result',
            $this->example->doSomething()
        );
    }

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        $this->example = new Example(
            //what this method do createStub ?
        //In the provided code snippet, the createStub method is being used to create a test double (or mock object) of the Collaborator class. This mock object is then passed as a parameter to the constructor of the Example class.
        //Mock objects are used in unit testing to simulate the behavior of real objects in order to isolate the code being tested and make the tests more focused. By creating a mock object of the Collaborator class, the test can control the behavior of the collaborator object and verify interactions with it without relying on the actual implementation of the collaborator.
        //In this context, the createStub method is likely a helper method provided by a testing framework (such as PHPUnit) to easily create mock objects for testing purposes.

        // what is different between createStub method and createMock
        //In PHPUnit, both `createStub` and `createMock` are methods used for creating mock objects, but they have different purposes and behaviors:
        //
        //1. `createStub`: This method is used to create a simple stub object that implements the specified interface or extends the specified class. Stubs are typically used to provide canned responses to method calls and are not concerned with verifying interactions. Stubs are useful when you only need to simulate the behavior of an object without verifying how it is used.
        //
        //2. `createMock`: This method is used to create a mock object that extends the specified class or implements the specified interface. Mock objects are more powerful than stubs as they allow you to set expectations on method calls, specify return values, and verify that specific methods are called with certain arguments. Mocks are useful when you need to verify interactions between objects in your tests.
        //
        //In summary, the main difference between `createStub` and `createMock` in PHPUnit is that `createStub` is used for creating simple stub objects for simulating behavior, while `createMock` is used for creating more powerful mock objects for verifying interactions and setting expectations.
            $this->createStub(Collaborator::class)
        );
    }

    protected function tearDown(): void
    {
        $this->example = null;
    }
}