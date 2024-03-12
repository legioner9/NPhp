<?

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // Работает
// echo $obj->protected; // Неисправимая ошибка
// echo $obj->private; // Неисправимая ошибка
$obj->printHello(); // Выводит Public, Protected и Private