<?php

$arr = array(1, 2, 3, 4);
print_r($arr);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo "$value ";
}
unset($value);
echo "\n";
foreach ($arr as $value) {
    echo "$value ";
}
// массив $arr сейчас таков: array(2, 4, 6, 8)
unset($value); // разорвать ссылку на последний элемент
echo "\n";

foreach($arr as $key => $value){
    echo "{$key}=>{$value}\n";
}