<? 

function inverse($x) {
    if (!$x) {
        throw new Exception('Деление на ноль.');
    }
    return 1 / $x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'PHP перехватил исключение: ',  $e->getMessage(), "\n";
}

// Продолжить выполнение
echo "Привет, мир\n";