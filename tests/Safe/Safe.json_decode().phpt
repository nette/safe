<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


Assert::null(Safe::json_decode('null'));
Assert::false(Safe::json_decode('false'));
Assert::true(Safe::json_decode('true')); // don't ignore true
Assert::same('ok', Safe::json_decode('"ok"'));


Assert::exception(function () {
	Safe::json_decode('');
}, Safe\JsonException::class, 'Syntax error');


Assert::exception(function () {
	Safe::json_decode('{');
}, Safe\JsonException::class, 'Syntax error');


Assert::exception(function () {
	Safe::json_decode("\"\xC1\xBF\"");
}, Safe\JsonException::class, 'Malformed UTF-8 characters, possibly incorrectly encoded');
