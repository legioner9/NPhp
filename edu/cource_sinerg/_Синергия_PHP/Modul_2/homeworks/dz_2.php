<?php

// 1) Cоздайте функцию, которая принимает два аргумента, выполняет вычисление с их использованием, а затем возвращает предложение.
function fn_words($word_1, $word_2)
{
    return "$word_1 " . "$word_2";
}

// 2) Создайте массив и выполните его сортировку.
echo "fn_words('Hello', 'World !') = " . fn_words('Hello', 'World !') . "\n";

$arr_letters = array('w', 'e', 'a', 'b', 'a');
sort($arr_letters);
print_r($arr_letters);
