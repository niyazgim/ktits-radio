<?php

require_once('../../database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $stmt = $PDO->query("DELETE FROM `products` WHERE `id` = $id");
  echo json_encode(['id' => $id]);
}
