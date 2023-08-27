<?php

// Напишите программу, которая будет получать на входе две строки и выводить на экран, является ли вторая строка анаграммой
// первой (т.е. состоит ли она из тех же букв в обратном порядке)

$str1 = $argv[1];
$str2 = $argv[2];

$strlen1 = strlen($str1);
$strlen2 = strlen($str2);

$arr1 = str_split($str1);
$arr2 = str_split($str2);

var_dump($arr1);
var_dump($arr2);

if ($strlen1 != $strlen2) {
    echo "Строки не являются анаграммами друг друга\n";
} else {
    $arr1 = str_split($str1);
    $arr2 = str_split($str2);

    var_dump($arr1); 
    var_dump($arr2);

    if ($arr1 === $arr2) {
        echo "Строки являются анаграммами друг друга\n";
    } else {
        echo "Строки не являются анаграммами друг друга\n";
    }
}
