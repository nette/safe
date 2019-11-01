<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


ini_set('pcre.backtrack_limit', '3'); // forces PREG_BACKTRACK_LIMIT_ERROR
ini_set('pcre.jit', '0');

Assert::exception(function () {
	Safe::preg_split('#.*\d\d#', '0123456789');
}, Safe\PcreException::class, 'Backtrack limit was exhausted (pattern: #.*\d\d#)');

Assert::exception(function () {
	Safe::preg_match('#.*\d\d#', '0123456789');
}, Safe\PcreException::class, 'Backtrack limit was exhausted (pattern: #.*\d\d#)');

Assert::exception(function () {
	Safe::preg_match_all('#.*\d\d#', '0123456789');
}, Safe\PcreException::class, 'Backtrack limit was exhausted (pattern: #.*\d\d#)');

Assert::exception(function () {
	Safe::preg_replace('#.*\d\d#', 'x', '0123456789');
}, Safe\PcreException::class, 'Backtrack limit was exhausted (pattern: #.*\d\d#)');

Assert::exception(function () {
	Safe::preg_replace_callback('#.*\d\d#', function () { return 'x'; }, '0123456789');
}, Safe\PcreException::class, 'Backtrack limit was exhausted (pattern: #.*\d\d#)');
