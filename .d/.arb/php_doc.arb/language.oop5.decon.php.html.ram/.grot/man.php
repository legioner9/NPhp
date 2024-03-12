<?

class BaseClass
{
    function __construct()
    {
        print "Конструктор класса BaseClass\n";
    }
    function __destruct()
    {
        print "Уничтожается " . __CLASS__  . "\n";
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        parent::__construct();
        print "Конструктор класса SubClass\n";
    }
}

class OtherSubClass extends BaseClass
{
    // Наследует конструктор класса BaseClass
}

// Конструктор класса BaseClass
$obj = new BaseClass();

// Конструктор класса BaseClass
// Конструктор класса SubClass
$obj = new SubClass();

// Конструктор класса BaseClass
$obj = new OtherSubClass();

class Point
{
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function __destruct()
    {
        print "Уничтожается " . __CLASS__  . "\n";
    }
}

// Передаём оба параметра
$p1 = new Point(4, 5);
var_dump($p1);
// $p1 = null;
// Передаём только обязательные параметры. Переменная $y содержит значение по умолчанию 0
$p2 = new Point(4);
var_dump($p2);

// Вызываем с именованными параметрами (начиная с PHP 8.0):
$p3 = new Point(y: 5, x: 4);
var_dump($p3);
