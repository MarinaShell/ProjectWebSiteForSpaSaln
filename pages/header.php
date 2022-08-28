<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <table cellspacing="10" cellpadding="0" width="100%" height="50%">
            <tr >
                <td>
                    <a class = "main_links" href="./index.php"><h1>Спа-салон "Таити"</h1></a>                    
                </td>
                <td class = "headerTd" >
                    <a href="#">Записаться on-line</a>                    
                </td>
                <td class = "headerTd">
                    <a href="#">Купить сертификат</a>                                 
                </td>
                <td>
                        <?php
                        require "./auth.php";
                        $login = getCurrentUser();
                        if ($login === null) { ?>
                        <a href = "./login.php"><p>Вход</p></a>
                        <?php }
                        if ($login !== null) { ?>                        
                        <p class = "pLog">Добро пожаловать,<?= $login ?></p>
                        <br>
                        <a href = "./logout.php"><p>Выйти</p></a>
                        <?php } ?>                    
                </td>
            </tr>
        </table>
    </header>
</body>
</html>