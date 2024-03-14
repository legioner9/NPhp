<?

function gen_one_to_three()
{
    for ($i = 1; $i <= 3; $i++) {
        // Обратите внимание, что $i сохраняет своё значение между вызовами.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}


/* $input содержит пары ключ/значение разделённые точкой с запятой */

$input = <<<'EOF'
1;PHP;Любит знаки доллара
2;Python;Любит пробелы
3;Ruby;Любит блоки
EOF;

function input_parser($input)
{
    foreach (explode("\n", $input) as $line) {
        $fields = explode(';', $line);
        $id = array_shift($fields);

        yield $id => $fields;
    }
}

// 1
// 2
// 3

foreach (input_parser($input) as $id => $fields) {
    echo "$id:\n";
    echo "    $fields[0]\n";
    echo "    $fields[1]\n";
}

// 1:
//     PHP
//     Любит знаки доллара
// 2:
//     Python
//     Любит пробелы
// 3:
//     Ruby
//     Любит блоки