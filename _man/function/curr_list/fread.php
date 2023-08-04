<?php

$file_descr = fopen('/home/st/REPOBARE/_repo/NPhp/_man/function/curr_list/data_1/file.txt',"r");
echo fread($file_descr, 10);
echo "\n";
fclose($file_descr);
