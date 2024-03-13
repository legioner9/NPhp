<?

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

$val = Suit::Spades;
var_dump($val);

print Suit::Spades->name;
