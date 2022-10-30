<?php

$list = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];
$list1 = array_keys($list);
//var_dump($list1);

$list2 = array_values($list);
//var_dump($list2);

$list00 = [
    'a' => 'word a',
    'b' => 'word b',
];

$list01 = [
    'c' => 'word c',
    'd' => 'word d',
    'a' => 'word a2',
];

$arr = array_merge($list00, $list01);
//var_dump($arr);

$list11 = ['a', 'b', 'c'];
$list12 = ['d', 'e', 'a'];

$arr2 = array_merge($list11, $list12);
//var_dump($arr2);

$list20 = [
    'a' => 'word a',
    'word b',
];
$list21 = [
    'c' => 'word c',
    'a' => 'word a2',
    'word d',
];

$arr3 = array_merge($list20, $list21);
//var_dump($arr3);

$key = ['a', 'b'];
$val = ['word a', 'word b'];

$li = array_combine($key, $val);
//var_dump($li);

$flip = array_flip($list00);
var_dump($flip);

$rev = array_reverse($list11);
//var_dump($rev);

$rev2 = array_reverse($list);
//var_dump($rev2);

$rev3 = array_reverse($list11, true);
//var_dump($rev3);

$hasLetter = in_array('b', $list11);
//var_dump($hasLetter);

$hasLetter2 = array_search('b', $list11);
//var_dump($hasLetter2);

$hasLetter3 = array_search('word c', $list00);
//var_dump($hasLetter3);
