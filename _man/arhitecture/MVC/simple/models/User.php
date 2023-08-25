<?php
class User {
    // Метод, возвращающий список пользователей
    public static function getAllUsers() {
        // Здесь можно реализовать получение списка пользователей из базы данных или другого источника данных
        $users = [
            ['name' => 'John', 'age' => 25],
            ['name' => 'Jane', 'age' => 30],
            ['name' => 'Bob', 'age' => 35]
        ];
        
        return $users;
    }
}
?>