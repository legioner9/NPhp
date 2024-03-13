<?
include "A.php";

$s = file_get_contents('store');
$a = unserialize($s);

// теперь можно использовать метод show_one() объекта $a.
// $a->show_one();