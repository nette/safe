<?php

/**
 * @phpVersion < 7.4
 */

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


class Test
{
	public function __toString()
	{
		return 1;
	}
}

Assert::error(function () {
	$test = new Test;
	implode('', [$test]);
}, E_RECOVERABLE_ERROR);


// don't ignore error that is related to function
Assert::exception(function () {
	$test = new Test;
	error_clear_last();
	Safe::implode('', [$test]);
}, Safe\Exception::class, 'Method Test::__toString() must return a string value');

Assert::null(error_get_last()['message']);
