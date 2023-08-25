<?php
class Cookie
{

    public function set($key, $value, $time = 31536000)
    {
        setcookie($key, $value, time() + $time, '/');
    }

    public function get($key)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }
        return null;
    }

    public function del($key)
    {
        if (isset($_COOKIE[$key])) {
            // self::get($key);
            unset($_COOKIE[$key]);
        }
    }
}

$cookie = new Cookie();

$cookie->set('name', 'Jone');
$value = $cookie->get('name');

echo "<br>setCookie: " . $value;

$cookie->del('name');
$value = $cookie->get('name');

echo "<br>deleteCookie: " . $value;



// Создайте класс Cookie - оболочку над работой с куками. Класс должен иметь следующие методы: установка куки set(имя куки, ее
// значение), получение куки get(имя куки), удаление куки del(имя куки).

?>