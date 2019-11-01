<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


set_error_handler(function ($severity, $message) use (&$res) {
	$res = $message;
});

// restores handler
Assert::same('a', Safe::trim(' a '));

trigger_error('OK1', E_USER_WARNING);
Assert::same('OK1', $res);


// restores handler on error
try {
	Safe::preg_match('ab', 'foo');
} catch (Exception $e) {
}

trigger_error('OK2', E_USER_WARNING);
Assert::same('OK2', $res);


// restores handler on error inside
Safe::preg_replace_callback('#.#', function () {
	$a++;
}, 'x');

Assert::same('Undefined variable: a', $res);


// restores handler on exception inside
Assert::exception(function () {
	Safe::preg_replace_callback('#.#', function () {
		throw new Exception('in callback');
	}, 'x');
}, 'Exception', 'in callback');

trigger_error('OK3', E_USER_WARNING);
Assert::same('OK3', $res);
