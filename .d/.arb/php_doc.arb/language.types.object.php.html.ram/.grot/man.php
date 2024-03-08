<?

class foo
{
    function do_foo()
    {
        echo "Do))) foo\n";
    }
}

$obj = new foo;

$obj->do_foo();

$obj1 = new \stdClass; // Instantiate stdClass object
$obj2 = new class{}; // Instantiate anonymous class
$obj3 = (object)[]; // Cast empty array to object

var_dump($obj1); // object(stdClass)#1 (0) {}
var_dump($obj2); // object(class@anonymous)#2 (0) {}
var_dump($obj3); // object(stdClass)#3 (0) {}