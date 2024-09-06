<?php
// session_start();

// require_once 'database/database.php';
require_once('./resources/views/layouts/layout.php');
?>


  <?php
  switch ($_SERVER['REQUEST_URI']) {
    case ('/'):
      return Layout('Main page', './resources/views/pages/mainpage.php');
      break;
    case ('/contacts'):
      echo 'contacts page';
      break;
    case ('/catalog'):
      echo 'catalog page';
      break;
    default:
      echo '404 page not found';
      http_response_code(404);
      break;
  }
  // if (isset($_GET['page'])) {
  //   if ($_GET['page'] === 'edit') {
  //     include 'pages/edit.php';
  //   } else if ($_GET['page'] === 'delete' && isset($_GET['id'])) {
  //     include 'action/delete.php';
  //   }
  //   if ($_GET['page'] === 'registation') include 'pages/registation.php';
  //   else if ($_GET['page'] === 'login') include 'pages/login.php';
  //   else if ($_GET['page'] === 'addnews') include 'pages/addnews.php';
  //   else if ($_GET['page'] === 'admin') include 'pages/admin.php';
  //   else if ($_GET['page'] === 'useracc') include 'pages/useracc.php';
  //   else if ($_GET['page'] === 'mainpage') include 'pages/mainpage.php';
  // } else include 'pages/mainpage.php';
  ?>