<?php

function my_strlen($string)
{
    $i = 0;
    while (isset($string[$i])) {
        $i += 1;
    }
    return $i;
}

echo my_strlen('abcde bsfdb ') . "\n";

// using strlen: echo strlen('abcde bsfdb '); 12
// Напишите свой аналог функции strlen. О ней подробнее вы можете узнать, пройдя по ссылке
// - https://code.mu/ru/php/manual/string/strlen/