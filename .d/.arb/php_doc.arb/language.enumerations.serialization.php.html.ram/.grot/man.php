<?

enum Suit
{
    case Hearts;
    case Clubs;
    case Spades;
    case Diamonds;
}

Suit::Hearts === unserialize(serialize(Suit::Hearts));

print serialize(Suit::Hearts);
// E:11:"Suit:Hearts";