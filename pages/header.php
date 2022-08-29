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
                    <a class = "main_links" href="../index.php"><h1>Спа-салон "Таити"</h1></a>                    
                </td>
                <td class = "headerTd" >
                    <span><a href="#">Записаться on-line</a></span>                    
                </td>
                <td class = "headerTd">
                    <span><a href="#">Купить сертификат</a></span>                                 
                </td>
                <td>
                        <?php
                            require "auth.php";
                            $login = getCurrentUser();
                            if ($login === null) {
                        ?>
                                <a href = "login.php"><p class = "pLog">Вход</p></a>
                        <?php }
                            if ($login !== null) { 
                        ?>                        
                                <p class = "pLog">Добро пожаловать,<?= $login ?></p>
                                <?php 
                                    $date = getUserDate();
                                    $a = explode('-',$date); //режем на массив
                                    $b = mktime(0,0,0,$a[1],$a[2],$a[0]);
                                    $c = strtotime(date('d.m.Y'));
                                    
                                    if ($b==$c){
                                ?>
                                     <p class = "pLog">Поздравляем с днем рождения!</p>
                                     <p class = "pLog"> Ваша персональная скидка 10%</p>
                                <?php }  

                                    else
                                    {
                                    ?>
                                        <p class = "pLog">До вашего дня рождения осталось:
                                        <?php
                                        if ($b<$c){ //проверяем было ли д.р. в этом году
                                            echo (($c-mktime(0,0,0,$a[1],$a[2],date('Y')-1))/86400); 
                                        }
                                        else{ 
                                            echo (($c-$b)/86400)*-1;
                                        }
                                    ?>
                                        день</p>
                                        <p class = "pLog"> Ваша персональная скидка 5%</p>
                                    <?php }
                                    ?> 
                                     
                                <a href = "logout.php"><p class = "pLog">Выйти</p></a>
                                <?php } ?>                    
                </td>
            </tr>
        </table>
    </header>
</body>
</html>