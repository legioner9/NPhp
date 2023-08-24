<?php

$myFile='file.txt';
$str='Я учу PHP!';

$fd = fopen($myFile,"w+");
fwrite($fd,$str);
fseek($fd,0);

var_dump(fread($fd,filesize($myFile)));
fseek($fd,0);

echo fread($fd,filesize($myFile));
echo "\n";

fclose($fd);

// Создайте файл ‘file.txt' и запишите в него фразу 'Я учу PHP!'.
// Считайте данные из файла ‘file.txt' и выведите их на экран.