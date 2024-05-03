<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

namespace Onepress\PasswordBcrypt\Tests;

define('ABSPATH', __DIR__ . '/__fixtures__/wp/');
define('WPINC', 'wp-includes');

if (version_compare(phpversion(), '7.1', '<')) {
    class_alias(TestCaseLegacy::class, 'Onepress\PasswordBcrypt\Tests\TestCase');
}

require __DIR__ . '/../vendor/autoload.php';
