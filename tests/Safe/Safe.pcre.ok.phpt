<?php

declare(strict_types=1);

use Nette\Safe;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


Assert::same(['hel'], Safe::preg_grep('#\w+#', ['hel', ' ']));

Assert::same(['', ' ', ''], Safe::preg_split('#\w+#', 'hel lo'));

Assert::same('x x', Safe::preg_filter('#\w+#', 'x', 'hel lo', -1, $count));
Assert::same(2, $count);
unset($count);

Assert::same(1, Safe::preg_match('#.+#', 'abc', $m));
Assert::same(['abc'], $m);
unset($m);

Assert::same(2, Safe::preg_match_all('#\w+#', 'ab cef', $m));
Assert::same([['ab', 'cef']], $m);
unset($m);

Assert::same('x x', Safe::preg_replace('#\w+#', 'x', 'ab cef', -1, $count));
Assert::same(2, $count);
unset($count);

Assert::same('x x', Safe::preg_replace_callback('#\w+#', function () { return 'x'; }, 'ab cef', -1, $count));
Assert::same(2, $count);
unset($count);

Assert::same('x x', Safe::preg_replace_callback_array(['#\w+#' => function () { return 'x'; }], 'ab cef', -1, $count));
Assert::same(2, $count);
unset($count);
