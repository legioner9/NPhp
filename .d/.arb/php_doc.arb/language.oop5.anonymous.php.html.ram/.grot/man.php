<?

// Использование явного класса
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

// $util->setLogger(new Logger());

// // Использование анонимного класса
// $util->setLogger(new class {
//     public function log($msg)
//     {
//         echo $msg;
//     }
// });

class SomeClass
{
}
interface SomeInterface
{
}
trait SomeTrait
{
}

var_dump(new class(10) extends SomeClass implements SomeInterface {
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    use SomeTrait;
});

// object(SomeClass@anonymous)#1 (1) {
//     ["num":"SomeClass@anonymous":private]=>
//     int(10)
//   }