<?php

if (!empty($_POST)){
    
    require "auth.php";

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkPassword($login, $password)){
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /ProjectSpaSalon/index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href = "../css/style.css">
        <title>Форма авторизации</title>
    </head>
    <body>
        
        <?php if (isset($error)) :?>
        <span style = "color:red;">
        <?= $error ?>
        </span>
        <?php endif;?>

        <form action = "login.php" method = "post">
            <label for="login"><p>Имя пользователя:</p> </label> 
            <input type = "text" name = "login" id = "login">
            <br>
            <label for="password"><p>Пароль: </p></label> 
            <input type = "text" name = "password" id = "password">
            <br>
            <br>
            <button class = "buttons" value = "Войти"> Войти </button>
        </form>
    </body>
</html>