<?php
session_start();
require_once '../database/database.php';
global $connection;

if (!isset($_POST)) die('Поддерживается только post запрос');

$email = $_POST['email'];
$password = $_POST['password'];



$sql = "SELECT * FROM `user` WHERE `email` = '$email'";
$query = $connection->query($sql);
$user = $query->fetch(PDO::FETCH_ASSOC);

if (empty($email)) $_SESSION['errors']['email'] = 'Поле email является обязательным';

if (empty($password)) $_SESSION['errors']['password'] = 'Поле пароля является обязательным';

else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $_SESSION['errors']['email'] = 'Почта введена неккоректно';

else {
  if (empty($user)) $_SESSION['errors']['email'] = 'Вы не зарегистрированы';

  if ($user['role_id'] == 3) $_SESSION['errors']['email'] = 'Вы заблокированы и не можете войти в систему';
}


if (!empty($password) && empty($_SESSION['errors']['email']) && !password_verify($password, $user['password'])) {
  $_SESSION['errors']['password'] = 'Неверный пароль';
}

if (!empty($_SESSION['errors'])) {
  header('Location: ../index.php?page=login');
  die;
}

$_SESSION['user'] = $user;
unset($_SESSION['email']);
header('Location: ../index.php?page=mainpage');
