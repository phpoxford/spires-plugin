<?php
declare(strict_types=1);

// Check for composer dependencies
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    echo "\e[31m[error] Run `composer update` to install dependencies.\e[0m" . PHP_EOL;
    exit;
}

// Report all PHP errors.
error_reporting(E_ALL);

// Allow the script to hang around waiting for connections.
set_time_limit(0);

// Turn on implicit output flushing so we see what we're getting as it comes in.
ob_implicit_flush();
