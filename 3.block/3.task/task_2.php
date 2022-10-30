<?php

$q = rand(1, 9);
$w = rand(1, 3) * 10;

var_dump($q);
var_dump($w);

$e = $q * $w;

switch (true) {
    case $e >= 0 && $e < 100:
        echo "1";
        break;

    case $e >= 100 && $e < 200:
        echo "2";
        break;

    case $e >= 200 && $e < 300:
        echo "3";
        break;
}
