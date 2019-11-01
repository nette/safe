<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


Assert::same('a', Safe::trim(' a '));

Assert::same('a', Safe::TRIM(' a '));

// don't return true
Assert::null(Safe::copy(__FILE__, 'tmp'));

// handle false
Assert::false(Safe::is_file(__DIR__));
