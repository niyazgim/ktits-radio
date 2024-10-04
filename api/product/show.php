<?php

require_once('../../database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $stmt = $PDO->query("SELECT * FROM `products` WHERE `id` = $id");
  echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
}
