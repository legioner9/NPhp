<? 

$arr = array(1, 2, 3, 4);
print_r($arr);

// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
// )

foreach ($arr as &$value) {
    $value = $value * 2;
}
// массив $arr теперь выглядит так: array(2, 4, 6, 8)
unset($value); 
print_r($arr);

// Array
// (
//     [0] => 2
//     [1] => 4
//     [2] => 6
//     [3] => 8
// )

