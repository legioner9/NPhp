<?

$foo = 'bar';
unset($foo);
var_dump($foo); # NULL

function destroy_foo1()
{
    global $foo1;
    unset($foo);
}

$foo1 = 'bar1';

destroy_foo1();

var_dump($foo1); # string(4) "bar1"

function glob_distr_foo2()
{
    unset($GLOBALS['foo2']);
}

$foo2 = 'bar2';

glob_distr_foo2();

var_dump($foo2); # NULL

function foo3(&$bar3)
{
    unset($bar3);
    $bar3 = "blah";
}

$bar3 = 'something';
echo "$bar3\n";

foo3($bar3);

echo "$bar3\n";

function foo4()
{
    static $bar4;
    $bar4++;
    echo "До удаления: $bar4, ";
    unset($bar4);
    $bar4 = 23;
    echo "После удаления: $bar4\n";
}

foo4();
foo4();
foo4();
