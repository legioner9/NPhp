<?

namespace namespacename;

class classname
{
    function __construct()
    {
        echo __METHOD__, "\n";
    }
}

function funcname()
{
    echo __FUNCTION__, "\n";
}

const constname = "namespaced";

include 'example1.php';

$a = 'classname';
$obj = new $a; // Выводит classname::__construct
$b = 'funcname';
$b(); // Выводит funcname
echo constant('constname'), "\n"; // Выводит global

/* Обратите внимание, что в двойных кавычках символ обратного слеша нужно заэкранировать. Например, "\\namespacename\\classname" */
$a = '\namespacename\classname';
$obj = new $a; // Выводит namespacename\classname::__construct
$a = 'namespacename\classname';
$obj = new $a; // Тоже выводит namespacename\classname::__construct
$b = 'namespacename\funcname';
$b(); // Выводит namespacename\funcname
$b = '\namespacename\funcname';
$b(); // Тоже выводит namespacename\funcname
echo constant('\namespacename\constname'), "\n"; // Выводит namespaced
echo constant('namespacename\constname'), "\n"; // Тоже выводит namespaced

// classname::__construct
// funcname
// global
// classname::__construct
// funcname
// global
// namespacename\classname::__construct
// namespacename\classname::__construct
// namespacename\funcname
// namespacename\funcname
// namespaced
// namespaced
