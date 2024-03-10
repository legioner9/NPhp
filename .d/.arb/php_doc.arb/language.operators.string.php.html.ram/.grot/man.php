<? 

$a = '12345';

// This works:
 echo "qwe{$a}rty\n"; // qwe12345rty, using braces
 echo "qwe" . $a . "rty\n"; // qwe12345rty, concatenation used

// Does not work:
 echo 'qwe{$a}rty\n'. "\n"; // qwe{$a}rty, single quotes are not parsed
 echo "qwe$arty\n"; // qwe, because $a became $arty, which is undefined