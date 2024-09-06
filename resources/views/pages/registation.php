<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mntn</title>
    <link rel="stylesheet" href="style/registation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- начало блока шапки -->
    <img class="logotip" src="media/Logo.png" width="80px">
    <header>
        <nav>
            <a href="">Equipment</a>
            <a href="">About us</a>
            <a href="">Blog</a>
            <p class="acc">Account</p>
            </nav>
    </header>
    <!-- конец блока шапки -->
<!-- блок формы начало -->
<h2 class="zagregist">REGISTRATION</h2>
<section class="sign">
    <div class="container">
        <div class="title-form"></div>
        <form class="regist" action="action/register.php" method="post" name="sign-up">
            <input class="reggg" type="text" name="name" placeholder="username">
            <?php
                if (isset($_SESSION['errors']['name'])) {
            ?>
        <p style="color:red"><?= $_SESSION['errors']['name'] ?></p>
        <?php
        unset($_SESSION['errors']['name']);
    }
    ?>

            <input class="reggg" type="text" name="email" placeholder="email" value="<?php if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
            unset($_SESSION['email']);
        } ?>">

    <?php
    if (isset($_SESSION['errors']['email'])) {
        ?>
        <p style="color:red"><?= $_SESSION['errors']['email'] ?></p>
        <?php
        unset($_SESSION['errors']['email']);
    }
    ?>
        <input class="reggg" type="password" name="password"placeholder="password">
            <?php
                if (isset($_SESSION['errors']['password'])) {
            ?>
        <p style="color:red"><?= $_SESSION['errors']['password'] ?></p>
        <?php
        unset($_SESSION['errors']['password']);
    }
    ?>
            <input class="reggg" type="password" name="password_r" placeholder="password repeat">

            <?php
    if (isset($_SESSION['errors']['password_r'])) {
        ?>
        <p style="color:red"><?= $_SESSION['errors']['password_r'] ?></p>
        <?php
        unset($_SESSION['errors']['password_r']);
    }
    ?>

            <input class="reggg" type="submit" value="SIGN UP" name="sign-up">
        </form>
        <p class="ssilka">Have account?<a class="videl" href="?page=login">Log in</a></p>
    </div>
</section>
<!-- блок формы конец -->

</body>
</html>