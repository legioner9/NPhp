<?

class Foo
{
    public static function aStaticMethod()
    {
        echo "this aStaticMethod of " . __CLASS__ ."\n";
    }
}

Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod();

class Foo2
{
    public static $my_static = 'foo2';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo2
{
    public function foo2Static() {
        return parent::$my_static;
    }
}


print Foo2::$my_static . "\n";

$foo2 = new Foo2();
print $foo2->staticValue() . "\n";
print $foo2->my_static . "\n";      // Не определено свойство my_static

print $foo2::$my_static . "\n";
$classname = 'Foo2';
print $classname::$my_static . "\n";

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->foo2Static() . "\n";