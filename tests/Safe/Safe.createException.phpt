<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


Assert::with(Safe::class, function () {
	Assert::type(Safe\Exception::class, self::createException('xxx', 'test'));
	Assert::type(Safe\MysqlException::class, self::createException('mysql_connect', 'test'));
	Assert::type(Safe\MysqliException::class, self::createException('mysqli_connect', 'test'));
});
