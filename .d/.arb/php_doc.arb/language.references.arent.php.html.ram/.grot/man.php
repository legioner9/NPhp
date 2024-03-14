<?
$bar = 5;
$baz = 9;
function foo(&$var)
{
    $var = &$GLOBALS["baz"];
    echo 'echo $var' . "\n";
    echo $var . "\n"; // 9
}
foo($bar);
echo 'echo $bar' . "\n";
echo $bar; // 5
