<?php

$word = 'secret';
$cipher = 2;

$a = 'a';
$z = 'z';
$codeWord = '';
$deCodeWord = '';

for ($i = 0; $i < strlen($word); $i++) {
    $val = ord($word[$i]) + $cipher;

    if ($val > ord($z)) {
        $val = ($val - ord($z)) + ord($a) - 1;
    }
    $codeWord .= chr($val);
}

echo $codeWord;
echo "\n";

for ($n = 0; $n < strlen($codeWord); $n++) {
    $val = ord($codeWord[$n]) - $cipher;
    if ($val < ord($a)) {
        $val = ($val + ord($z)) - ord($a) + 1;
    }
    $deCodeWord .= chr($val);
}
echo $deCodeWord;
