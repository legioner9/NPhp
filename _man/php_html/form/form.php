<form>
    Введите имя: <input type=text name="name"><br>
    Введите возраст: <input type=text name="age"><br>
    <input type=submit value="GO!">
</form>
<!-- {ht_form} -->

<?php
var_dump($_GET);     // пустой массив
var_dump($_POST);    // массив с ключами test1 и test2
var_dump($_REQUEST); // массив с ключами test1 и test2
?>