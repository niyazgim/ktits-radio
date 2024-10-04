<?php

require_once('../../database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $id = $_POST['id'];
  $stmt = $PDO->query("UPDATE `products` SET `name`='" . $name . "',`price`='" . $price . "' WHERE id ='" . $id . "'");
  echo json_encode([]);
}
