<?

$makefoo = true;

/* Мы не можем вызвать функцию foo() в этом месте,
   поскольку она ещё не определена, но мы можем
   обратиться к bar() */

bar();

if ($makefoo) {
    function foo()
    {
        echo "Я не существую до тех пор, пока выполнение программы меня не достигнет.\n";
    }
}

/* Теперь мы благополучно можем вызывать foo(),
   поскольку $makefoo была интерпретирована как true */

if ($makefoo)
    foo();

function bar()
{
    echo "Я существую сразу с начала старта программы.\n";
}

