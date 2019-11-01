<?php

/**
 * @phpExtension curl
 */

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


// don't return true
test(function () {
	$ch = Safe::curl_init('http://example.org');
	Assert::null(Safe::curl_exec($ch));
});


// error in "constructor"
test(function () {
	$e = Assert::exception(function () {
		Safe::curl_init("\x00");
	}, Safe\CurlException::class, 'Curl option contains invalid characters (\0)');

	Assert::same(__FILE__, $e->getFile());
	Assert::same(__LINE__ - 4, $e->getLine());
});


// error detectable only by result code
test(function () {
	$ch = Safe::curl_init('//');
	$e = Assert::exception(function () use ($ch) {
		Safe::curl_exec($ch);
	}, Safe\CurlException::class);

	Assert::same(__FILE__, $e->getFile());
	Assert::same(__LINE__ - 4, $e->getLine());
});
