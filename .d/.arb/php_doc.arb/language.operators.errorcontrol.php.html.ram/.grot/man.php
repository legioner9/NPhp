<? 

/* Преднамеренная ошибка при работе с файлами */
$my_file = @file ('non_existent_file') or
    die ("Ошибка при открытии файла: сообщение об ошибке было таким: '" . error_get_last()['message'] . "'");

// работает для любых выражений, а не только для функций
$value = @$cache[$key];
// В случае если ключа $key нет, сообщение об ошибке (notice) не будет отображено