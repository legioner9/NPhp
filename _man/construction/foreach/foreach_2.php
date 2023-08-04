<?php

$mfile = '/home/st/REPOBARE/_repo/NPhp/_man/construction/foreach/data/file.txt';

$fd = file($mfile);

foreach ($fd as $str) {
    echo $str;
}
echo "\n";
