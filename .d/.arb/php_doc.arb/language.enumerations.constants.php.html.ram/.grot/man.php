<? 

// Константе перечисления разрешено ссылаться на вариант перечисления
enum Size
{
    case Small;
    case Medium;
    case Large;

    public const Huge = self::Large;
}