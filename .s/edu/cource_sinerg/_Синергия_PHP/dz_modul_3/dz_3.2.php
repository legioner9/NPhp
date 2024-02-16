<form method='POST'>
    Введите имя: <input type=text name="name" placeholder="Enter your name"><br>
    Введите возраст: <input type=text name="age" placeholder="Enter your age"><br>
    <input type="submit" value="GO!" name="name_submit">
</form>
<!-- Создайте простую HTML-форму, которая принимает имя пользователя и его возраст и отображает это с помощью оператора PHP echo. -->

<?php

echo "<br>";


    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "your name is: $name<br>your age is: $age";

?>