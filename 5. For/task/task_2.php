<?php
$letter = ['A', 'B'];
$number = range(000, 999);

for ($i = 0; $i < count($letter); $i++) {

    for ($n = 0; $n < count($number); $n++) {
        $array[] = $letter[$i] . str_pad($number[$n], 3, 0, STR_PAD_LEFT) . $letter[$i] . $letter[$i];

    }
}

foreach ($array as $key => $value) {
    if ($key > 0) {
        echo "$value \n";
    }
}

foreach ($array as $index => $num) {

    if ($num[1] != $num[2] && $num[2] != $num[3]) {
        unset($array[$index]);
    }
}

var_dump($array);
