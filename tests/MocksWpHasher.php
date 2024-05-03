<?php

namespace Onepress\PasswordBcrypt\Tests;

use Mockery;

trait MocksWpHasher
{
    protected function wpHasher()
    {
        global $wp_hasher;

        return $wp_hasher = Mockery::mock('overload:PasswordHash');
    }
}
