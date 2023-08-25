<?php
$path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');

echo '/www/htdocs/inc/lib.inc.php', "\n";
echo $path_parts['dirname'], "\n";
echo $path_parts['basename'], "\n";
echo $path_parts['extension'], "\n";
echo $path_parts['filename'], "\n";

print_r(pathinfo('/some/path/.test'));
print_r(pathinfo(__DIR__));
print_r(pathinfo(__FILE__));



// Array
// (
//     [dirname] => /some/path
//     [basename] => .test
//     [extension] => test
//     [filename] => 
// )