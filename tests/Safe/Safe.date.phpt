<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


// date_create_from_format
Assert::same('254361661', Safe::date_create_from_format('Y-m-d H:i:s', '1978-01-23 01:01:01')->format('U'));

$e = Assert::exception(function () {
	Safe::date_create_from_format('Y-m-d', 'invalid');
}, Safe\DatetimeException::class, 'date_create_from_format() failures.');


// date_modify
Assert::same('254448061', Safe::date_modify(new \DateTime('1978-01-23 01:01:01'), '+1 day')->format('U'));

$e = Assert::exception(function () {
	Safe::date_modify(new \DateTime('1978-01-23 01:01:01'), \DateTime::COOKIE);
}, Safe\DatetimeException::class, 'Failed to parse time string (l, d-M-Y H:i:s T) at position 4 (-): Unexpected character');


// date_date_set
Assert::same('254358000', Safe::date_date_set(new \DateTime('midnight'), 1978, 1, 23)->format('U'));


// date_isodate_set
Assert::same('254444400', Safe::date_isodate_set(new \DateTime('midnight'), 1978, 4, 2)->format('U'));


// date_sub
Assert::same('253497661', Safe::date_sub(new \DateTime('1978-01-23 01:01:01'), new DateInterval('P10D'))->format('U'));


// date_time_set
Assert::same('254361723.000004', Safe::date_time_set(new \DateTime('1978-01-23 01:01:01'), 1, 2, 3, 4)->format('U.u'));


// date_timestamp_set
Assert::same('3600', Safe::date_timestamp_set(new \DateTime(), 3600)->format('U'));


// date_timezone_set
Assert::same('254361661', Safe::date_timezone_set(new \DateTime('1978-01-23 01:01:01'), new \DateTimeZone('Asia/Hong_Kong'))->format('U'));
