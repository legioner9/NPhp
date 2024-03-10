<?

class MyClass
{
}

class NotMyClass
{
}

class ChaildClass extends MyClass
{
}

$a = new MyClass();
$b = new ChaildClass();

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);
var_dump($b instanceof MyClass);

interface MyInterface
{
}

class MyImplementClass implements MyInterface
{
}

$str_my_class='MyClass';
$str_my_interface="MyInterface";

var_dump(new MyImplementClass() instanceof $str_my_interface);
