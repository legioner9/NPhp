<? 

echo 'Переменные $expand и $either также не разворачиваются';


$values = [<<<END
a
  b
    c
END, 'd e f'];
var_dump($values);

echo <<<'EOT'
Меня зовут "$name". Я печатаю $foo->foo.
Теперь я печатаю {$foo->bar[1]}.
Это не должно вывести заглавную 'A': \x41
EOT;