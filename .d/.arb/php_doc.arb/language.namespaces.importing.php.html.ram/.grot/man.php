<? 

namespace foo;

use My\Full\Classname as Another;

// Это то же, что и My\Full\NSname as NSname
use My\Full\NSname;

// Импортирование глобального класса
use ArrayObject;

// Импортирование функции
use function My\Full\functionName;

// Создание псевдонима функции
use function My\Full\functionName as func;

// Импортирование константы
use const My\Full\CONSTANT;

$obj = new namespace\Another; // Создаёт экземпляр класса foo\Another
$obj = new Another; // Создаёт объект класса My\Full\Classname
NSname\subns\func(); // Вызывает функцию My\Full\NSname\subns\func

$a = new ArrayObject(array(1)); // Создаёт объект класса ArrayObject
// без выражения use ArrayObject был бы создан объект класса foo\ArrayObject

func(); // вызывает функцию My\Full\functionName
echo CONSTANT; // выводит содержимое константы My\Full\CONSTANT