<? 

enum ErrorCode
{
    case SOMETHING_BROKE;
}

function quux(ErrorCode $errorCode)
{
    // Кажется, что этот код охватывает все варианты
    match ($errorCode) {
        ErrorCode::SOMETHING_BROKE => true,
    };
}