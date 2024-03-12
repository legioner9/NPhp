<?

$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// Выведет 51
var_export($fn(5)(10));