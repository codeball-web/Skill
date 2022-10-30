<?php

$q = 9;
$w = rand(1, 3) * 10;

var_dump($q);
var_dump($w);

if ($q * $w < 100) {
    echo "Меньше 100";
} elseif ($q * $w < 200) {
    echo "Меньше 200";
} else {
    echo "Третий вариант";
}
