<?php

function square($num)
{
    return $num * $num;
}

echo "square(5) = " . square(5) . "\n";

function sum($num1, $num2)
{
    return $num1 + $num2;
}

echo "sum(5,6) = " . sum(5, 6) . "\n";

function sub_div($num1, $num2, $num3)
{
    return ($num1 - $num2) / $num3;
}

echo "sub_div(10,6,2) = " . sub_div(10, 6, 2) . "\n";

function day_of_week($num)
{
    $arr = array("понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье");
    return $arr[$num - 1];
}

echo "day_of_week(3) = " . day_of_week(3) . "\n";
// 1)
//  возвращает квадрат числа. Число передается параметром.
// 2)
//  возвращает сумму двух чисел. Числа передаются параметрами функции.
// 3)
//  отнимает от первого числа второе и делит на третье.
// 4)
//  принимает параметром число от 1 до 7, а возвращает день недели на русском языке.