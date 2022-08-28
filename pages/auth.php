<?php

/*функция  возвращает массив всех пользователей и хэшей их паролей*/
function getUsersList(){ 
    return require 'userBD.php';
}

/*функция  проверяет, существует ли пользователь с указанным логином*/
function existsUser($login){
    $users = getUsersList();

    foreach ($users as $user){
        if ($user['login'] === $login){
                return true;
            }
    }

    return false;
}

/*****************************************************************************/
/*функция возвращает true тогда, когда существует пользователь с 
указанным логином и введенный им пароль прошел проверку, иначе — false*/
function checkPassword(string $login, string $password){
    $users = getUsersList();

    if (existsUser($login))
    {
        foreach ($users as $user){
            if ($user['login'] === $login &&
               password_verify($password, $user['password'])){
                    return true;
                }
        }
    }
 
    return false;
}

/*****************************************************************************/
/*функция, которая возвращает либо имя вошедшего на сайт 
пользователя, либо <null>*/
function getCurrentUser():?string{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCooie = $_COOKIE['password'] ?? '';
    if (checkPassword($loginFromCookie, $passwordFromCooie)){
        return $loginFromCookie;
    }

    return null;
}

?>

