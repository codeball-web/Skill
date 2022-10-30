<?php

$str = 'Hello World';

$word1 = substr($str, 0, 5);
echo $word1;

$part = substr($str, 4);
//echo $part;

$part2 = substr($str, -5);
//echo $part2;

$part3 = substr($str, 6, -3);
//echo $part3;

$index = strpos($str, 'Hell');
//var_dump($index);

$str2 = 'abc abc';
$index2 = strpos($str2, 'abc', 2);
//var_dump($index2);

$ind3 = stripos($str2, 'ABC');
//var_dump($ind3);

$rep = str_ireplace('HEllo', 'Hi', $str);
//echo $rep;

$rep2 = str_replace('abc', '123', $str2, $count);
//echo $rep2;
//var_dump($count);

$rep3 = strtolower($str);
//echo $rep3;

$rep4 = strtoupper($str);
//echo $rep4;

$hi = '    Hello    ';
$res = trim($hi);
//echo $res;

$res2 = rtrim($hi);
//echo $res2;
