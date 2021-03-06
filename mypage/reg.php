<?php
include_once 'classes/Classes.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Алексей Барьянов</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/home.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normilize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flexstyle.css">
    <link rel="stylesheet" type="text/css" href="css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
</head>
<body>
<?php
include_once "inc/background.php"
?>
<?php
include_once 'inc/header.php'
?>
<main class="main section border">
    <div class="reg_block">
        <h1>РЕГИСТРАЦИЯ</h1>
        <form class=" reg_screen" method="post">
            <input required placeholder="login" class="si weight" type="text" name="reg_login">
            <input required placeholder="password" class="si weight" type="text" name="reg_password">
            <input type="submit" class="weight" value="Зарегистрироваться">
            <?
            $my_page->Registration();
            ?>
        </form>
    </div>
</main>
<?
include_once 'inc/footer.php'
?>
<script src="js/theme.js"></script>
</body>
</html>
