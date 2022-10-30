<?php

$testResults = ['Петров' => 40, 'Иванов' => 50, 'Сидоров' => 90, 'Васечкин' => 100, 'Алексеев' => 60];

foreach ($testResults as $key => $testResults) {
    if ($testResults > 70) {
        //echo "Кандидат с Именем {$key} набрал более 70 баллов\n";
    }
}

$testArray = [1, 2, 3];

foreach ($testArray as &$value) {
    $value = 0;
}

print_r($testArray);
