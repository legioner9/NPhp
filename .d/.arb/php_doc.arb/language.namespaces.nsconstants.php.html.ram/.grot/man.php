<?

# example NOT RUN

namespace MyProject;

echo '"', __NAMESPACE__, '"'; // Выводит «MyProject»

function get($classname)
{
    $a = __NAMESPACE__ . '\\' . $classname;
    return new $a;
}

use blah\blah as mine; // Смотрите «Пространства имён: псевдонимирование и импорт»

blah\mine(); // Вызывает функцию MyProject\blah\mine()
namespace\blah\mine(); // Вызывает функцию MyProject\blah\mine()

namespace\func(); // Вызывает функцию MyProject\func()
namespace\sub\func(); // Вызывает функцию MyProject\sub\func()
namespace\cname::method(); // Вызывает статический метод method класса MyProject\cname
$a = new namespace\sub\cname(); // Создаёт экземпляр класса MyProject\sub\cname
$b = namespace\CONSTANT; // Присваивает значение константы MyProject\CONSTANT переменной $b