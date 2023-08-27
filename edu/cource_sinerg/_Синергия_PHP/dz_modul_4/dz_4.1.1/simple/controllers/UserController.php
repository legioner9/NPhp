<?php
echo "UserController.php\n";
require_once __DIR__ . '/../models/User.php' ;
require_once __DIR__ . '/../views/user-list.php';

class UserController {
    // Метод для отображения списка пользователей
    public function showUserList() {
        // Получение списка пользователей из модели
        $users = User::getAllUsers();
        
        // Передача списка пользователей в представление и его отображение
        include __DIR__ . '/../views/user-list.php';
    }
}

// echo realpath('../models/User.php');
// echo realpath('../views/user-list.php'); 
?>