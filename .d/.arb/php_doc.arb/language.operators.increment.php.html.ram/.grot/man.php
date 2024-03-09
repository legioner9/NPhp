<? 

echo 'Постфиксный инкремент:', PHP_EOL;
$a = 5;
var_dump($a++);
var_dump($a);

echo 'Префиксный инкремент:', PHP_EOL;
$a = 5;
var_dump(++$a);
var_dump($a);

echo 'Постфиксный декремент:', PHP_EOL;
$a = 5;
var_dump($a--);
var_dump($a);

echo 'Префиксный декремент:', PHP_EOL;
$a = 5;
var_dump(--$a);
var_dump($a);

echo '== Буквенные строки ==' . PHP_EOL;
$s = 'W';
for ($n=0; $n<6; $n++) {
    echo ++$s . PHP_EOL;
}
// Буквенно-цифровые строки ведут себя иначе
echo '== Буквенно-цифровые строки ==' . PHP_EOL;
$d = 'A8';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}
$d = 'A08';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}