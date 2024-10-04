<?php

require_once('../../database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name =$_POST['name'];
  $price = $_POST['price'];
  $stmt = $PDO->query("INSERT INTO `products`( `name`, `price`) VALUES ('" . $name . "','" . $price . "')");
  echo json_encode([]);
}
