<?

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj1 = new MyClass1();
$obj1->ec();

$obj2 = new MyClass2();
$obj2->ec();
