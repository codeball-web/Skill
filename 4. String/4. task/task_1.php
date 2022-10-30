<?php

$text = 'Лето пришло';

$space = mb_strpos($text, ' ');
var_dump($space);

$text2 = mb_substr($text, ($space + 1));

echo $text2;
