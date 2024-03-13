<? 

#! NOT RUN

namespace my\name; // Смотрите раздел «Определение пространств имён»

class MyClass {}
function myfunction() {}
const MYCONST = 1;

$a = new MyClass;
$c = new \my\name\MyClass; // Смотрите раздел «Глобальное пространство»

$a = strlen('hi'); // Смотрите раздел «Пространства имён: возврат
                   // к глобальному пространству для функций и констант»

$d = namespace\MYCONST; // Смотрите раздел «Ключевое слово namespace и магическая константа __NAMESPACE__»
$d = __NAMESPACE__ . '\MYCONST';
echo constant($d); // Смотрите раздел «Пространства имён и динамические особенности языка»