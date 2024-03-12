<?

class Foo
{
    public function method()
    {
    }
    public static function staticmethod()
    {
    }
    public function __invoke()
    {
    }
}

$obj = new Foo();
$classStr = 'Foo';
$methodStr = 'method';
$staticmethodStr = 'staticmethod';

$f1 = strlen(...);
var_export($f1);
echo "\n";
var_dump($f1);

$f2 = $obj(...);  // Вызываемый объект
$f3 = $obj->method(...);
$f4 = $obj->$methodStr(...);
$f5 = Foo::staticmethod(...);
$f6 = $classStr::$staticmethodStr(...);
// Традиционный callable-синтаксис со строками и массивами
$f7 = 'strlen'(...);
$f8 = [$obj, 'method'](...);
$f9 = [Foo::class, 'staticmethod'](...);