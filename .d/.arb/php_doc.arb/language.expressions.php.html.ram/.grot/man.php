<?

function double($i)
{
    return $i * 2;
}

$b = $a = 5;        /* присвоить значение пять переменным $a и $b */
$c = $a++;          /* постфиксный инкремент, присвоить значение переменной
       $a (5) — переменной $c */
$e = $d = ++$b;     /* префиксный инкремент, присвоить увеличенное
 значение переменной $b (6) — переменным $d и $e */

/* в этой точке и переменная $d, и переменная $e равны 6 */

$f = double($d++);  /* присвоить удвоенное значение перменной $d перед
инкрементом (2 * 6 = 12) — переменной $f */
echo "\$f=$f\n";
$g = double(++$e);  /* присвоить удвоенное значение перменной $e после
инкремента (2 * 7 = 14) — переменной $g */
echo "\$g=$g\n";
$h = $g += 10;      /* сначала переменная $g увеличивается на 10,
   приобретая, в итоге, значение 24. Затем значение
   присвоения (24) присваивается переменной $h,
   которая в итоге также становится равной 24. */
echo "\$g=$g\n";
echo "\$h=$h\n";
