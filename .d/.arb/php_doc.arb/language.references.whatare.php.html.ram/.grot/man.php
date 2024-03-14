<?

$var = "foo\n";
$ref1 = &$var; // new object that references $var
$ref2 = &$ref1; // references $var directly, not $ref1!!!!!

echo $ref1; // >foo

unset($ref1);

// echo $ref1; // >Notice:  Undefined variable: ref1
echo $ref2; // >foo
echo $var; // >foo


$var_a = "foo_a\n";
$ref_a = &$var_a;

echo 'echo $var_a;' . "\n";
echo $var_a;

echo '$ref_a = NULL' . "\n";
$ref_a = NULL;
echo 'echo $var_a;' . "\n";
echo $var_a; // Value is NULL, so nothing prints
echo 'echo $ref_a;' . "\n";
echo $ref_a; // Value is NULL, so nothing prints