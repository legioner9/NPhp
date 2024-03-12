<?

function &returns_reference()
{
    $someref = "xas";
    return $someref;
}

$newref =& returns_reference();

var_dump($newref);

function foo() {
    echo "В foo()<br />\n";
}

$func = 'foo';
$func(); 