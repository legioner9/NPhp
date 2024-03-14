<?

$GLOBALS["var"] = 5;
$var = &$GLOBALS["var"]; // global $var
$bar = &$var;

echo 'echo $var' . "\n";
echo $var . "\n";

unset($var);

echo 'echo $bar' . "\n";
echo $bar . "\n";
