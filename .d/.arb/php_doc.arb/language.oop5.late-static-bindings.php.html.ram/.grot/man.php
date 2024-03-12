<?

class A
{
    public static function who()
    {
        echo __CLASS__;
    }
    public static function test()
    {
        self::who();
    }
}

class B extends A
{
    public static function who()
    {
        echo __CLASS__;
    }
}

B::test();

echo "\n";

// A

// Пример #2 Простое использование static::

class A2
{
    public static function who()
    {
        echo __CLASS__;
    }
    public static function test()
    {
        static::who(); // Здесь действует позднее статическое связывание
    }
}

class B2 extends A2
{
    public static function who()
    {
        echo __CLASS__;
    }
}

B2::test();

echo "\n";

// B2

// Пример #3 Использование static:: в нестатическом контексте

class A3
{
    private function foo()
    {
        echo "success!\n";
    }
    public function test()
    {
        $this->foo();
        static::foo();
    }
}

class B3 extends A3
{
    /* foo() будет скопирован в В, следовательно его область действия по прежнему А,
       и вызов будет успешным */
}

class C3 extends A3
{
    private function foo()
    {
        /* исходный метод заменён; область действия нового метода - С */
    }
}

$b = new B3();
$b->test();
$c = new C3();
$c->test();   // потерпит ошибку

// success!
// success!
// success!
// PHP Fatal error:  Uncaught Error: Call to private method C3::foo() from scope A3 in /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.oop5.late-static-bindings.php.html.ram/.grot/man.php:68
// Stack trace:
// #0 /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.oop5.late-static-bindings.php.html.ram/.grot/man.php(89): A3->test()
// #1 {main}
//   thrown in /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.oop5.late-static-bindings.php.html.ram/.grot/man.php on line 68