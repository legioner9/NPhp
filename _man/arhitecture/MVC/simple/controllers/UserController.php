<?php
require_once ('../models/User.php');
require_once ('views/user-list.php');

class UserController {
    // Метод для отображения списка пользователей
    public function showUserList() {
        // Получение списка пользователей из модели
        $users = User::getAllUsers();
        
        // Передача списка пользователей в представление и его отображение
        include 'views/user-list.php';
    }
}
?>