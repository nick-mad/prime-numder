<?php

$n = 0;
$m = 6;

$middle = (int)(($n + $m) / 2);
$nextPrime = (int)gmp_nextprime($middle);
if ($nextPrime >= $m) {
    $nextPrime = 'Нет простого числа которое удовлетворяет условиям поиска';
}
$tmp = $middle;
do {
    $prevPrime = (int)gmp_nextprime($tmp--);
    if ($tmp < 0 || $prevPrime <= $n) {
        $prevPrime = 'Нет простого числа которое удовлетворяет условиям поиска';
        break;
    }
} while ($prevPrime >= $middle);

echo 'Ряд от ' . $n . ' до ' . $m . '<br>';
echo 'Медиана: ' . $middle . '<br>';
echo 'Ближайшее простое число слева от медианы: ' . $prevPrime . '<br>';
echo 'Ближайшее простое число справа от медианы: ' . $nextPrime . '<br>';
