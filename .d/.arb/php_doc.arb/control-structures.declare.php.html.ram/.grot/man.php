<?
declare(encoding='ISO-8859-1');
declare(ticks=1);


function tick_handler()
{
    echo "Вызывается tick_handler!()\n";
}

register_tick_function('tick_handler'); // вызывает событие тика

$a = 1; // вызывает событие тика

if ($a > 0) {
    $a += 2; // вызывает событие тика
    print $a; // вызывает событие тика
}

