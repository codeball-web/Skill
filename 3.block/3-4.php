<?php

$a = 3;

if ($a == 1) {
    $b = 10;
} elseif ($a == 2) {
    $b = 20;
} elseif ($a == 3) {
    $b = 30;
} else {
    $b = -10;

}

var_dump($b);

$c = 4;

switch ($a + 1) {
    case 3:
        $d = 0;
        break;
    case $c:
        $d = 1;
        break;

}

var_dump($d);
