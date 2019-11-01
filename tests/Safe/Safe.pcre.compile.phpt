<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


Assert::exception(function () {
	Safe::preg_split('#*#', '0123456789');
}, Safe\PcreException::class, 'Compilation failed: %a% (pattern: #*#)');

Assert::exception(function () {
	Safe::preg_match('#*#', '0123456789');
}, Safe\PcreException::class, 'Compilation failed: %a% (pattern: #*#)');

Assert::exception(function () {
	Safe::preg_match_all('#*#', '0123456789');
}, Safe\PcreException::class, 'Compilation failed: %a% (pattern: #*#)');

Assert::exception(function () {
	Safe::preg_replace('#*#', 'x', '0123456789');
}, Safe\PcreException::class, 'Compilation failed: %a% (pattern: #*#)');

Assert::exception(function () {
	Safe::preg_replace(['##', '#*#'], 'x', '0123456789');
}, Safe\PcreException::class, 'Compilation failed: %a%');

Assert::exception(function () {
	Safe::preg_replace_callback('#*#', function () { return 'x'; }, '0123456789');
}, Safe\PcreException::class, 'Compilation failed: %a% (pattern: #*#)');

Assert::exception(function () {
	Safe::preg_replace_callback(['##', '#*#'], function () { return 'x'; }, '0123456789');
}, Safe\PcreException::class, 'Compilation failed: %a%');
