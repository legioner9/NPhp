<?php
// print_r(mixed $value, bool $return = false): string|bool

$a = array('a' => 'apple', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
print_r($a);

$res = print_r($a, true);

echo $res;
