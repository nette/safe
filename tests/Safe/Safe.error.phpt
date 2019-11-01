<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


error_clear_last();

$e = Assert::exception(function () {
	Safe::copy('missing', 'missing');
}, Safe\FilesystemException::class, '%a%No such file%a%');

Assert::same(__FILE__, $e->getFile());
Assert::same(__LINE__ - 4, $e->getLine());

// error last is not set
Assert::same(null, error_get_last());


// case in-sensitive
Assert::exception(function () {
	Safe::COPY('missing', 'missing');
}, Safe\FilesystemException::class, '%a%No such file%a%');
