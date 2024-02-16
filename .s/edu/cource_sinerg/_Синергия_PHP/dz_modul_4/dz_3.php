<?php

// Напишите программу, которая будет получать на входе две строки и выводить на экран, является ли вторая строка анаграммой
// первой (т.е. состоит ли она из тех же букв в обратном порядке)

function is_anagram($str1, $str2)
{

    $arr1 = str_split($str1);
    $arr2 = str_split($str2);

    $len1 = count($arr1);
    $len2 = count($arr2);
    
    if ($len1 != $len2) {
        return false;
    } else {

        for ($i = 0; $i < count($arr1); $i++) {

            echo $arr1[$i], "\n";
            echo $arr2[$len2 - $i - 1], "\n";

            if ($arr1[$i] != $arr2[$len2 - $i - 1]) {
                return false;
            }
        }
        return true;
    }
}

if ($argc != 3) {
    echo "$argc != 3 \n";
    return 1;
}

if (is_anagram($str1, $str2)) {
    echo "strings is anagram\n";
} else {
    echo "strings is not anagram\n";
}
