<?php

$a = 4;
$b = 2;
$c = $a + $b--;


var_dump($c); // 6
var_dump($b); //1

$a = 4;
$b = 2;
$c = $a - ++$b;

var_dump($c); // 1
var_dump($b); // 3