<? 

interface Colorful
{
    public function color(): string;
}

enum Suit implements Colorful
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;

    // Выполняет контракт интерфейса.
    public function color(): string
    {
        return match($this) {
            Suit::Hearts, Suit::Diamonds => 'Красный',
            Suit::Clubs, Suit::Spades => 'Чёрный'
        };
    }

    // Не часть интерфейса; хорошо.
    public function shape(): string
    {
        return "Rectangle";
    }
}

function paint(Colorful $c)
{
   /* ... */
}

paint(Suit::Clubs);  // Работает

print Suit::Diamonds->shape(); // выведет "Rectangle"
print Suit::Diamonds->color(); // выведет "Rectangle"