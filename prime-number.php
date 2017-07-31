<?php

$n = 2;
$m = 6;

$middle = (int)(($n + $m) / 2);
$nextPrime = (int)gmp_nextprime($middle);
$tmp = $middle;
do{
    $prevPrime =  (int)gmp_nextprime($tmp--);
    if($tmp < 0){
        $prevPrime = 'Для среднего числа ' . $middle . ' нет простого числа меньшего за него';
        break;
    }
}while ($nextPrime === $prevPrime);

echo $middle .'<br>';
echo $prevPrime .'<br>';
echo $nextPrime .'<br>';
