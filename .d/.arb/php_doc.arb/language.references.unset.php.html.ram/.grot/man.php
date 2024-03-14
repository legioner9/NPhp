<?

$a = 1;
$b = &$a;
unset($a);

echo 'echo $b' . "\n";
echo $b . "\n"; // 1
