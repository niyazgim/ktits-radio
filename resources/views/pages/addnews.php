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
    
    <!-- конец блока шапки -->

    <?php
        if(isset($_SESSION['errors']['avatar'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['errors']['avatar'] ?>
            </div>
            <?php
            unset($_SESSION['errors']['avatar']);
        }
    ?>
<h2 class="zagregist">ADD NEWS</h2>
<section class="sign">
    <div class="container">
        <div class="title-form"></div>
        <form class="regist" enctype="multipart/form-data" action="action/addtovar.php" method="post" name="sign-up">
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input type="file" class="reggg" id="inputGroupFile01" name="avatar">
            <input class="reggg" type="text" name="nametov"placeholder="Tovar Name">
            <input class="reggg" type="text" name="description"placeholder="Description">
            <input class="reggg" type="submit" value="Add news" name="sign-up">
        </form>
    </div>
</section>

</body>
</html>