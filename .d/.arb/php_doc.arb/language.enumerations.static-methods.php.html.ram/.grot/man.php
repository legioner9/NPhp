<?

enum Size
{
    case Small;
    case Medium;
    case Large;

    public static function fromLength(int $cm): static
    {
        return match (true) {
            $cm < 50 => static::Small,
            $cm < 100 => static::Medium,
            default => static::Large,
        };
    }
}

enum Suit: string
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }

    public static function forSelect(): array 
    {
      return array_combine(
        array_column(self::cases(), 'value'),
        array_column(self::cases(), 'name')
      );
    }
}

var_dump(Suit::values());
var_dump(Suit::forSelect());

enum Gender:int
{
    case Male = 1;
    case Female = 2;

    public static function forSelect(): array
    {
        return [
            self::Male->value => [
                'label' => 'Male',
                'description' => 'This is the Male gender',
            ],
            self::Female->value => [
                'label' => 'Female',
                'description' => 'This is the Female gender',
            ],
        ];
    }

}

var_dump(Gender::forSelect());
