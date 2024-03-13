<?

$fiber = new Fiber(function (): void {
    $value = Fiber::suspend('fiber');
    echo "Значение возобновлённого файбера: ", $value, PHP_EOL;
});

$value = $fiber->start();

echo "Значение приостановленного файбера: ", $value, PHP_EOL;

$fiber->resume('test');
