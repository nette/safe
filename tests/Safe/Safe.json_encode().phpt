<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


Assert::same('"ok"', Safe::json_encode('ok'));


Assert::exception(function () {
	Safe::json_encode(["bad utf\xFF"]);
}, Safe\JsonException::class, 'Malformed UTF-8 characters, possibly incorrectly encoded');


Assert::exception(function () {
	$arr = ['recursive'];
	$arr[] = &$arr;
	Safe::json_encode($arr);
}, Safe\JsonException::class, '%a?%ecursion detected');


Assert::exception(function () {
	Safe::json_encode(NAN);
}, Safe\JsonException::class, 'Inf and NaN cannot be JSON encoded');
