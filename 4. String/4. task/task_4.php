<?php

$array = [
    'one' => '1',
    'two' => '2',
    'three' => '3',
    'four' => '4',
    'five' => '1',
];

$count = count($array);
var_dump($count);

$rev = array_flip($array);

$count2 = count($rev);
var_dump($count2);

$end = $count != $count2;
var_dump($end);
