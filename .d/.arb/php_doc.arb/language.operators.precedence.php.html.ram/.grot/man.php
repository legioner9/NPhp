<? 

$x = 4;
// следующий код может выдать неожиданный результат:
echo "x минус 1 равно " . $x-1 . ", ну, я надеюсь\n";

// требуемый приоритет следует задать скобками:
echo "x минус 1 равно " . ($x-1) . ", ну, я надеюсь\n";

// поскольку он вычисляется таким образом (до PHP 8.0.0):
echo (("x минус один равно " . $x) - 1) . ", ну, я надеюсь\n";
/*PHP Fatal error:  Uncaught TypeError: Unsupported operand types: string - int in /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.operators.precedence.php.html.ram/.grot/man.php:11
Stack trace:
#0 {main}
  thrown in /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.operators.precedence.php.html.ram/.grot/man.php on line 11*/


