<? 

interface Colorful
{
    public function color(): string;
}

trait Rectangle
{
    public function shape(): string {
        return "Прямоугольник";
    }
}

enum Suit implements Colorful
{
    use Rectangle;

    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;

    public function color(): string
    {
        return match($this) {
            Suit::Hearts, Suit::Diamonds => 'Красный',
            Suit::Clubs, Suit::Spades => 'Чёрный',
        };
    }
}

// var_dump(Colorful->color());

trait EnumToArray
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
        
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function asArray(): array
    {
        if (empty(self::values())) {
            return self::names();
        }
        
        if (empty(self::names())) {
            return self::values();
        }
        
        return array_column(self::cases(), 'value', 'name');
    }
}

// Some example outputs:


// var_export(IpVersion::names());     // ['Ipv4', 'IPv6']
// var_export(IpVersion::values());    // []
// var_export(IpVersion::asArray());   // ['IPv4', 'IPv6']

// var_export(Language::names());      // ['en', 'es']
// var_export(Language::values());     // ['English', 'Spanish']
// var_export(Language::asArray());    // ['en' => 'English', 'es' => 'Spanish']