<?php

require_once('../../database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $stmt = $PDO->query("SELECT * FROM `products`");
  $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($products);
}
