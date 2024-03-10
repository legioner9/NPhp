<?
$i = 2;
switch ($i) {
    case 0:
        echo "i равно 0\n";
        break;
    case 1:
        echo "i равно 1\n";
        break;
    case 2:
        echo "i равно 2\n";
        break;
}

// i равно 2

$i = "шоколадка";
switch ($i) {
    case "яблоко":
        echo "i это яблоко\n";
        break;
    case "шоколадка":
        echo "i это шоколадка\n";
        break;
    case "пирог":
        echo "i это пирог\n";
        break;
}

// i это шоколадка

$offset = 1;
$start = 3;

switch (true) {
    case $start - $offset === 1:
        print "A\n";
        break;
    case $start - $offset === 2:
        print "B\n";
        break;
    case $start - $offset === 3:
        print "C\n";
        break;
    case $start - $offset === 4:
        print "D\n";
        break;
}

// B