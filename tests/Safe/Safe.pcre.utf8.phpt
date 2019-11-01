<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


Assert::exception(function () {
	Safe::preg_split('#\d#u', "0123456789\xFF");
}, Safe\PcreException::class, 'Malformed UTF-8 data (pattern: #\d#u)');

Assert::exception(function () {
	Safe::preg_match('#\d#u', "0123456789\xFF");
}, Safe\PcreException::class, 'Malformed UTF-8 data (pattern: #\d#u)');

Assert::exception(function () {
	Safe::preg_match_all('#\d#u', "0123456789\xFF");
}, Safe\PcreException::class, 'Malformed UTF-8 data (pattern: #\d#u)');

Assert::exception(function () {
	Safe::preg_replace('#\d#u', 'x', "0123456789\xFF");
}, Safe\PcreException::class, 'Malformed UTF-8 data (pattern: #\d#u)');

Assert::exception(function () {
	Safe::preg_replace_callback('#\d#u', function () { return 'x'; }, "0123456789\xFF");
}, Safe\PcreException::class, 'Malformed UTF-8 data (pattern: #\d#u)');
