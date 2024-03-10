<?

$a = 5;
$b = 4;

if ($a > $b) {
    echo "a больше b\n";
} elseif ($a == $b) {
    echo "a равно b\n";
} else {
    echo "a меньше b\n";
}

if ($a > $b):
    echo $a . " больше " . $b . "\n";
elseif ($a == $b): // Заметьте, тут одно слово.
    echo $a . " равно " . $b . "\n";
else:
    echo $a . " не больше и не равно " . $b . "\n";
endif;
