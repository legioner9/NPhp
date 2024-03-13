<? 

// Это полностью законное определение перечисления.
enum Direction implements ArrayAccess
{
    case Up;
    case Down;

    public function offsetExists($offset): bool
    {
        return false;
    }

    public function offsetGet($offset): mixed
    {
        return null;
    }

    public function offsetSet($offset, $value): void
    {
        throw new Exception();
    }

    public function offsetUnset($offset): void
    {
        throw new Exception();
    }
}

class Foo
{
    // Это разрешено.
    const DOWN = Direction::Down;

    // Это запрещено, так как не может быть детерминированным.
    const UP = Direction::Up['short'];
    // Fatal error: Cannot use [] on enums in constant expression
}

// Это совершенно законно, потому что это не постоянное выражение.
$x = Direction::Up['short'];
var_dump("\$x – это " . var_export($x, true));

$foo = new Foo();