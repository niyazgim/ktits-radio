<?php

session_start();
require_once '../database/database.php';
global $connection;

unset($_SESSION['errors']);

$nametov = $_POST['nametov'];
$description = $_POST['description'];

$file = $_FILES['avatar'];

if ($file['error'] !== 0) {
  $_SESSION['errors']['avatar'] = 'Возникли ошибки при загрузке файла';
  die();
}

$types = [
  'image/jpeg',
  'image/png',
  'image/jpg',
  'image/gif',
  'image/bmp',
  'image/svg+xml'
];

if (!in_array($file['type'], $types)) {

  $_SESSION['errors']['avatar'] = 'Неверный тип файла';

  header('Location: ../index.php?page=addtovar');

  die();
}

if ($file['size'] > 1024 * 1024 * 10) {

  $_SESSION['errors']['avatar'] = 'Максимальный размер загружаемого файла 10 мб.';

  header('Location: ../index.php?page=addtovar');

  die();
}

$extension = pathinfo($file['name'], PATHINFO_EXTENSION);


$path = 'image/' . uniqid() . '.' . $extension;

if (!move_uploaded_file($file['tmp_name'], '../' . $path)) {

  $_SESSION['errors']['avatar'] = 'Не удалось загрузить файл';

  header('location: ../index.php?page=addtovar');

  die();
}



$sql = "INSERT INTO `tovars` (`id`, `nametov`, `description`, `avatar`) VALUES (NULL,'$nametov','$description', '$path')";
$query = $connection->query($sql);

header('Location: ../index.php?page=katalog');
