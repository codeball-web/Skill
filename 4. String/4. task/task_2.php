<?php

$text = 'Я люблю море. Я лечу на море. Я умею плавать в море. Какое чистое море! Хочу на море. Завтра поедем на море.';

$sea = 'море';

$aes = strrev($sea);

$text2 = str_replace($sea, $aes, $text);
echo $text2;
