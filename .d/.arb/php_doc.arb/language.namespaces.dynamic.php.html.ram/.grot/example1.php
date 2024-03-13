<?

class classname
{
    function __construct()
    {
        echo __METHOD__,"\n";
    }
}

function funcname()
{
    echo __FUNCTION__,"\n";
}

const constname = "global";

$a = 'classname';
$obj = new $a; // Выводит classname::__construct
$b = 'funcname';
$b(); // Выводит funcname
echo constant('constname'), "\n"; // Выводит global