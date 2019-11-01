<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


class Test
{
	public function __toString()
	{
		$a++;
		return 'hello';
	}
}

Assert::error(function () {
	$test = new Test;
	implode('', [$test]);
}, E_NOTICE, 'Undefined variable: a');


// ignore error that is not related to function
Assert::error(function () {
	$test = new Test;
	Safe::implode('', [$test]);
}, E_NOTICE, 'Undefined variable: a');


// error_get_last is filled
set_error_handler(null);
error_clear_last();
$test = new Test;
Safe::implode('', [$test]);
Assert::same('Undefined variable: a', error_get_last()['message']);
