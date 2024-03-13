<?

// file1.php

namespace Foo\Bar\subnamespace;

const FOO = 1;
function foo()
{
}
class foo
{
    static function staticmethod()
    {
    }
}

// file2.php

namespace Foo\Bar;

include 'file1.php';

const FOO = 2;
function foo()
{
}
class foo
{
    static function staticmethod()
    {
    }
}

/* Неполные имена */
foo(); // Разрешается в функцию Foo\Bar\foo
foo::staticmethod(); // Разрешается в метод staticmethod класса Foo\Bar\foo
echo FOO; // Разрешается в константу Foo\Bar\FOO

/* Полные имена */
subnamespace\foo(); // Разрешается в функцию Foo\Bar\subnamespace\foo
subnamespace\foo::staticmethod(); // Разрешается в метод staticmethod класса Foo\Bar\subnamespace\foo
echo subnamespace\FOO; // Разрешается в константу Foo\Bar\subnamespace\FOO

/* Абсолютные имена */
\Foo\Bar\foo(); // Разрешается в функцию Foo\Bar\foo
\Foo\Bar\foo::staticmethod(); // Разрешается в метод staticmethod класса Foo\Bar\foo
echo \Foo\Bar\FOO; // Разрешается в константу Foo\Bar\FOO

// Доступ к глобальным классам, функциям и константам из пространства имён

namespace Foo;

function strlen()
{
}
const INI_ALL = 3;
class Exception
{
}

$a = \strlen('hi'); // Вызывает глобальную функцию strlen
$b = \INI_ALL; // Получает доступ к глобальной константе INI_ALL
$c = new \Exception('error'); // Создаёт экземпляр глобального класса Exception