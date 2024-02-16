<?php
echo "this index.php\n";
require_once 'controllers/UserController.php';



// Создание экземпляра контроллера пользователей и вызов метода для отображения списка пользователей
$userController = new UserController();
$userController->showUserList();
