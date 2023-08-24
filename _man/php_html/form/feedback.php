<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="guruweba_example_form" name="feedback" method="POST">
        <div class="guruweba_example_caption">Обратная связь</div>
        <div class="guruweba_example_infofield">Тема обращения</div>
        <select name="theme" required="required">
            <option value="">Выберите вариант</option>
            <option>Вопрос по работе сервиса</option>
            <option>Помощь в оформлении заказа</option>
            <option>Сотрудничество</option>
            <option>Пожелания / предложения</option>
        </select>
        <div>Ваше имя</div>
        <input type="text" name="name" required="required">
        <div>Ваш email</div>
        <input type="email" name="email" required="required">
        <div>Сообщение</div>
        <textarea name="message"></textarea>
        <input type="submit" name="submit_btn" value="Отправить">
    </form>
    <?php
    var_dump($_GET);     // пустой массив
    var_dump($_POST);    // массив с ключами test1 и test2
    var_dump($_REQUEST); // массив с ключами test1 и test2
    ?>
    <!-- {ht_feedback} -->
</body>

</html>