<? 

$foo = 10;            // $foo — целое число
$str = "$foo";        // $str — строка
$fst = (string) $foo; // $fst тоже строка

// Выводит, что «они одинаковые»
if ($fst === $str) {
    echo "они одинаковые";
}