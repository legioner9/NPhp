<? 

enum SortOrder
{
    case Asc;
    case Desc;
}

function query($fields, $filter, SortOrder $order = SortOrder::Asc)
{
     /* ... */
}

// Функция query() теперь может безопасно работать, зная, что параметр $order 
// гарантированно будет либо вариантом SortOrder::Asc, либо вариантом SortOrder::Desc. 
// Любое другое значение привело бы к исключению TypeError, поэтому проверка ошибок или 
// тестирование не нужны

// Пример #2 Расширенные эксклюзивные значения

enum UserStatus: string
{
    case Pending = 'P';
    case Active = 'A';
    case Suspended = 'S';
    case CanceledByUser = 'C';

    public function label(): string
    {
        return match($this) {
            static::Pending => 'В ожидании',
            static::Active => 'Активный',
            static::Suspended => 'Приостановленный',
            static::CanceledByUser => 'Отменено пользователем',
        };
    }
}

// В этом примере статус пользователя может быть исключительно одним из следующих вариантов: 
// UserStatus::Pending, UserStatus::Active, UserStatus::Suspended или 
// UserStatus::CanceledByUser. Функция может ввести параметр UserStatus и 
// затем принять только эти четыре значения, точка.

// У всех четырёх значений есть метод label(), который возвращает удобочитаемую строку. 
// Эта строка не зависит от скалярной эквивалентной строки "machine name", которую можно
//  использовать, например, в поле базы данных или значении выпадающего списка HTML.

foreach (UserStatus::cases() as $case) {
    printf('<option value="%s">%s</option>\n', $case->value, $case->label());
}

// p3__ 1 ${REPO_PATH}/NPhp/.d/.arb/php_doc.arb/language.enumerations.examples.php.html.ram/.grot/man.php