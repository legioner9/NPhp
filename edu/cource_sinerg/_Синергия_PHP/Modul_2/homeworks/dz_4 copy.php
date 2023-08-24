<?php

$myFile='file.txt';
$str='Я учу PHP!';

// $fd = fopen($myFile,'w+');
// fwrite($fd,$str);
// fflush($fd);
echo fread($fd,11);
echo "\n";

fclose($fd);

$fd2 = fopen("z.txt",'w+');

echo fread($fd2,11);
fclose($fd2);

// Создайте файл ‘file.txt' и запишите в него фразу 'Я учу PHP!'.
// Считайте данные из файла ‘file.txt' и выведите их на экран.