<?php

namespace Onepress\PasswordBcrypt\Tests;

use Brain\Monkey;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class TestCase extends MockeryTestCase
{
    use MocksWpdb;
    use MocksWpHasher;

    /**
     * Setup the test case.
     *
     * @return void
     */
    protected function setUp(): void
    {
        Monkey\setUp();
        parent::setUp();
    }

    /**
     * Tear down the test case.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        Monkey\tearDown();
        parent::tearDown();
    }
}
