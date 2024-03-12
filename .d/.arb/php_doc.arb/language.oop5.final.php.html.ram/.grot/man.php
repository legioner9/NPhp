<? 

class BaseClass
{
   public function test()
   {
       echo "Вызван метод BaseClass::test()\n";
   }

   final public function moreTesting()
   {
       echo "Вызван метод BaseClass::moreTesting()\n";
   }
}

class ChildClass extends BaseClass
{
   public function moreTesting()
   {
       echo "Вызван метод ChildClass::moreTesting()\n";
   }
}

// PHP Fatal error:  Cannot override final method BaseClass::moreTesting() in /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.oop5.final.php.html.ram/.grot/man.php on line 18