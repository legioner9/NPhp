<?php
// require_once(__DIR__ . "/" . 'controllers/UserController.php');


$root_dir = __DIR__;
echo $root_dir . "\n";

echo $root_dir . "/" . 'controllers/UserController.php' . "\n";

require('controllers/UserController.php');

// Создание экземпляра контроллера пользователей и вызов метода для отображения списка пользователей
// $userController = new UserController();
// $userController->showUserList();
