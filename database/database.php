<?php 

try {
    $host = 'localhost';
    $dbname = 'z924';
    $username = 'z924';
    $password = 'MjwXjbyNmfa2CBji';
    $dsn ="mysql:host=$host;dbname=$dbname";
    $connection = new PDO ($dsn,$username,$password);
}
catch (PDOException $exception) {
    echo 'Возникла ошибка. Текст ошибки: ' . $exception ->getMessage();
}