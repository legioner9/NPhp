<?

class foo
{
    public $value = 42;

    public function &getValue()
    {
        return $this->value;
    }
}

$obj = new foo;
$myValue = &$obj->getValue(); // $myValue указывает на $obj->value, равное 42.
$obj->value = 2;
echo $myValue;                // отобразит новое значение $obj->value, то есть 2.