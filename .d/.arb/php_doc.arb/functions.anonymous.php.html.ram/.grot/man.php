<?

$message = 'привет';

// Без "use"
$example = function () {
    var_dump($message);
};
echo "1\n";
$example();

// Наследуем $message
$example = function () use ($message) {
    var_dump($message);
};
echo "2\n";
$example();

// Значение унаследованной переменной задано там, где функция определена,
// но не там, где вызвана
$message = 'мир';
echo "3\n";
$example();

// Сбросим message
$message = 'привет';

// Наследование по ссылке
$example = function () use (&$message) {
    var_dump($message);
};
echo "4\n";
$example();

// Изменённое в родительской области видимости значение
// остаётся тем же внутри вызова функции
$message = 'мир';
echo "5\n";
echo $example();

// Замыкания могут принимать обычные аргументы
$example = function ($arg) use ($message) {
    var_dump($arg . ', ' . $message);
};
echo "6\n";
$example("привет");

// Объявление типа возвращаемого значения идет после конструкции use
$example = function () use ($message): string {
    return "привет, $message";
};
echo "7\n";
var_dump($example());