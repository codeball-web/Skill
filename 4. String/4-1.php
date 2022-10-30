<?php

$str1 = "Привет, \"мир\"!";

//echo $str1;

$str2 = "\nКак дела?\t - Хорошо!";
//echo $str2;

$a = 25;
$str3 = "\nМне $a лет";
//echo $str3;

$str = <<<EOD
Привет, мир. \n
как дела? "Хорошо"
строка через here\doc-синстаксис \n
EOD;

//echo $str;

$str0 = 'hello';
$str02 = "world";

$str03 = $str0 . $str02;
//echo $str03;

$str04 = 'Привет';
$str04 .= 'Мир';

//echo $str04;

$str11 = 'hello';
//var_dump($str11);

$str12 = 'Привет';
//var_dump($str12);

$lengts = mb_strlen($str12);
//var_dump($lengts);

$str20 = 'hello';
$e = $str20[1];
echo $e;

$letterO = $str20[strlen($str20) - 1];
//echo $letterO;

$str20[1] = 'E';
//echo $str20;
