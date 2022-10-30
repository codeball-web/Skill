<?php

$list = [
    'a' => 'letter a',
    'b' => 'letter b',
    'c' => 'letter c',
];

$key = array_keys($list);

$key2 = implode(' ', $key);
echo $key2;
