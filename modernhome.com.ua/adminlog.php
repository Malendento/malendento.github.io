<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
    <title>Admin Log In | Modern Home</title>

    <link rel="stylesheet" href="./css/zoom.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="./css/adminlog.css">
</head>
<body>
<div class="adminlog">
    <img class="adminlog__logo" src="./img/logo.svg" alt="" srcset="">

    <h3 class="adminlog__title">Вхід в адмінпанель Modernhome</h3>
    <form method="post" action="auth.php">
        <div class="group">
            <input type="text" required name="username">
            <span class="bar adminlog_span"></span>
            <label>Логін</label>
        </div>
        <div class="group">
            <input type="password" required name="password">
            <span class="bar adminlog_span"></span>
            <label>Пароль</label>
        </div>
        <button type="submit" name="login_user" class="custom-button-footer adminlog__button">ВХІД</button>
    </form>
</div>
</body>
</html>