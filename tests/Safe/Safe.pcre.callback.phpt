<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


Assert::error(function () { // php error in callback
	Assert::same('HELLO', Safe::preg_replace_callback(
		'#.+#',
		function ($m) {
			$a++; // E_NOTICE
			return strtoupper($m[0]);
		},
		'hello'
	));
}, E_NOTICE, 'Undefined variable: a');


Assert::error(function () { // PCRE compile error in callback
	Assert::same('HELLO', Safe::preg_replace_callback(
		'#.+#',
		function ($m) {
			preg_split('#*#', '0123456789'); // E_WARNING, sets preg_last_error() to PREG_INTERNAL_ERROR
			return strtoupper($m[0]);
		},
		'hello'
	));
}, E_WARNING, 'preg_split(): Compilation %a%');


Assert::noError(function () { // PCRE runtime error in callback
	Assert::same('HELLO', Safe::preg_replace_callback(
		'#.+#',
		function ($m) {
			preg_match('#\d#u', "0123456789\xFF"); // no PHP error, sets preg_last_error() to PREG_BAD_UTF8_ERROR
			return strtoupper($m[0]);
		},
		'hello'
	));
});
