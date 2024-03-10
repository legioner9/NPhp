<?


$a = array("a" => "яблоко", "b" => "банан");
$b = array("a" => "груша", "b" => "клубника", "c" => "вишня");

echo "\$a \n";
var_dump($a);
echo "\$b \n";
var_dump($b);

$c = $a + $b; // Объединение $a и $b
echo "Объединение \$a и \$b: \n";
var_dump($c);

$c = $b + $a; // Объединение $b и $a
echo "Объединение \$b и \$a: \n";
var_dump($c);

$a += $b; // Объединение $a += $b — это $a и $b
echo "Объединение \$a += \$b: \n";
var_dump($a);

$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)