<?php

$myFile='file.txt';
$str='Я учу PHP!';

$fd = fopen($myFile,'w+');
fwrite($fd,$str);

echo fread($fd,11);
echo "\n";

fclose($fd);

// Создайте файл ‘file.txt' и запишите в него фразу 'Я учу PHP!'.
// Считайте данные из файла ‘file.txt' и выведите их на экран.