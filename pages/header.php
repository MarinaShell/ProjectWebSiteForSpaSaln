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
                            $login = getCurrentUser();//проверяем, есть ли пользователь
                            if ($login === null) {
                        ?>
                                <a href = "login.php"><p class = "pLog">Вход</p></a>
                        <?php }
                            if ($login !== null) { 
                        ?>                        
                                <p class = "pLog">Добро пожаловать,<?= $login ?></p>
                                <?php 
                                    $date = getUserDate();//берем дату рождения пользователя
                                    $a = explode('-',$date); //режем на массив
                                    $b = mktime(0,0,0,$a[1],$a[2],$a[0]);
                                    $c = strtotime(date('d.m.Y'));//текущая дата
                                    
                                    if ($b==$c){//если даты совпали
                                ?>
                                     <p class = "pLog">Поздравляем с днем рождения!</p>
                                     <p class = "pLog"> Ваша персональная скидка 10%</p>
                                <?php }  

                                    else //даты не совпали
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
                                        дней</p>
                                        <p class = "pLog"> Ваша персональная скидка 5%</p>
                                     <?php }

                                        $datetime1 = new DateTime(date("H:i:s"));//Получаем текущее время
                                        $datetime2 = new DateTime('23:59:59');//Время, до которого действует акция
                                        $interval2 = $datetime2->diff($datetime1); // И считаем разницу для времени
                                    ?>  <p class = "pLog"> До конца акции осталось:
                                    <?php    echo $interval2->format(' %h ч. %i мин. %s сек.');    
                                    ?> </p>
                                  
                                <a href = "logout.php"><p class = "pLog">Выйти</p></a>
                                <?php } ?>                    
                </td>
            </tr>
        </table>
    </header>
</body>
</html>