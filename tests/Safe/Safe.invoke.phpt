<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


$res = Safe::invoke(function () {
	$a = 10;
	return $a;
});

Assert::same(10, $res);


// error
Assert::exception(function () {
	Safe::invoke(function () {
		$a++;
		return $a;
	});
}, Safe\Exception::class, 'Undefined variable: a');


// muted error
Assert::noError(function () {
	Safe::invoke(function () {
		@$a++;
		return $a;
	});
});
