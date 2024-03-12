<?

function bool2str($bool)
{
    return (string) $bool;
}

function compareObjects(&$o1, &$o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "\n";
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "\n";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "\n";
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "\n";
}

class Flag
{
    public $flag;

    function __construct($flag = true)
    {
        $this->flag = $flag;
    }
}

class OtherFlag
{
    public $flag;

    function __construct($flag = true)
    {
        $this->flag = $flag;
    }
}

$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

echo "Два экземпляра одного и того же класса\n";
compareObjects($o, $p);

echo "\nДве ссылки на один и тот же экземпляр\n";
compareObjects($o, $q);

echo "\nЭкземпляры двух разных классов\n";
compareObjects($o, $r);

// o1 == o2 : 1
// o1 != o2 : 
// o1 === o2 : 
// o1 !== o2 : 1

// Две ссылки на один и тот же экземпляр
// o1 == o2 : 1
// o1 != o2 : 
// o1 === o2 : 1
// o1 !== o2 : 

// Экземпляры двух разных классов
// o1 == o2 : 
// o1 != o2 : 1
// o1 === o2 : 
// o1 !== o2 : 1