<?php
$list[0] = 'Овощи';
$list[1] = 'Фрукты';
$list[2] = 'Ягоды';

//echo $list[1];

$list2[] = 'a';
$list2[] = 'b';
$list2[] = 'c';

//echo $list2[1];

$list['veg'] = 'Овощи';
$list['frut'] = 'Фрукты';
$list['ber'] = 'Ягоды';

//echo $list['frut'];

$list0 = [1, 3, 5, 7];

//echo $list0[2];

$list01 = ['veg' => 'Овощи', 'frut' => 'Фрукты', 'ber' => 'Ягоды'];
//echo $list01['frut'];

$a = sizeof($list0);
//var_dump($a);

$b = count($list01);
//var_dump($b);

$str = 'Hello World';

$lis = explode(' ', $str);
//var_dump($lis);

$lis2 = implode('-|-', $list0);
echo $lis2;
