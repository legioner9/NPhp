<? 

interface ITest
{
    public function apfel(): mixed; // valid as of 8.0
}

class Test implements ITest
{
    public function apfel(): array // more explicit
    {
        return [];
    }
}

var_dump((new Test())->apfel());

