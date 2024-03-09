<? 

$x = true and false;   //$x will be true
var_dump($x);
$y = (true and false); //$y will be false
var_dump($y);

$a = 'a';
$b = 'b';

$a .= $b .= "foo";

echo $a,"\n",$b,"\n";