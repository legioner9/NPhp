<?

class SimpleClass
{
    // объявление свойства
    public $var = 'значение по умолчанию'."\n";

    // объявление метода
    public function displayVar()
    {
        echo $this->var;
    }
}

$nc = new SimpleClass();
$nc->displayVar();