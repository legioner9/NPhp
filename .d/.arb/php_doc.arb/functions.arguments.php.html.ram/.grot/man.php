<?

function add_some_extra(&$string)
{
    $string .= 'и кое-что ещё.';
}
$str = 'Это строка, ';
add_some_extra($str);
echo $str;    // выведет 'Это строка, и кое-что ещё.'

class DefaultCoffeeMaker
{
    public function brew()
    {
        return 'Приготовление кофе.';
    }
}
class FancyCoffeeMaker
{
    public function brew()
    {
        return 'Приготовление прекрасного кофе специально для вас.';
    }
}
function makecoffee($coffeeMaker = new DefaultCoffeeMaker)
{
    return $coffeeMaker->brew();
}
echo makecoffee();
echo makecoffee(new FancyCoffeeMaker);