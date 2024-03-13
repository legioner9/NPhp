<? 

namespace A\B\C;
class Exception extends \Exception {}

$a = new Exception('hi'); // Переменная $a — это объект класса A\B\C\Exception
$b = new \Exception('hi'); // Переменная $b — это объект класса Exception

$c = new ArrayObject; // Фатальная ошибка, класс A\B\C\ArrayObject не найден