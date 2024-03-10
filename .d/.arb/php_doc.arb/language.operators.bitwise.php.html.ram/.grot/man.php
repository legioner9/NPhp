<? 

/*
 * Не обращайте внимания на верхний раздел кода,
 * это просто форматирование для более ясного вывода.
 */
$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";

echo <<<EOH
 ----------  ----------- -- ----------
 результат   значение    оп тест
 ----------  ----------- -- ----------
EOH;

/*
 * Вот сами примеры.
 */

 $values = array(0, 1, 2, 4, 8);
 $test = 1 + 4;
 
 echo "\n Побитовое И (AND) \n";
 foreach ($values as $value) {
     $result = $value & $test;
     printf($format, $result, $value, '&', $test);
 }
 
 echo "\n Побитовое (включающее) ИЛИ (OR) \n";
 foreach ($values as $value) {
     $result = $value | $test;
     printf($format, $result, $value, '|', $test);
 }
 
 echo "\n Побитовое ИСКЛЮЧАЮЩЕЕ ИЛИ (XOR) \n";
 foreach ($values as $value) {
     $result = $value ^ $test;
     printf($format, $result, $value, '^', $test);
 }