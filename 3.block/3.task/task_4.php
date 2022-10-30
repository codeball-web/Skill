<?php

$q = rand(0, 1);
$w = $q == 0 ? null : rand(1, 3);

switch ($w) {
    case null:
        echo "Item NULL";
        break;
    case 1:
        echo "Item One";
        break;
    default:
        echo "different Item";
        break;
}

var_dump(isset($w));

$e = $w ?? rand(20, 30);

var_dump($e);
