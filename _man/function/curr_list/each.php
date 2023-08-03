<?php

$foo=array("Robert" => "Bob", "Maria"=> "Anna");
print_r(each($foo));
reset($foo);
// Array
// (
//     [1] => Bob
//     [value] => Bob
//     [0] => Robert
//     [key] => Robert
// )