<?

class MyClass
{
    const CONSTANT = 'значение константы';

    function showConstant()
    {
        echo self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo MyClass::CONSTANT . "\n";
echo $classname::CONSTANT . "\n";

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT . "\n";