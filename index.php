<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Спа-салон Таити</title>
    <link rel="stylesheet" href = "./css/style.css">
</head>
<body>

    <header>
        <table cellspacing="10" cellpadding="0" width="100%" height="50%">
            <tr >
                <td>
                    <a class = "main_links" href="index.php"><h1>Спа-салон "Таити"</h1></a>                    
                </td>
                <td class = "headerTd" >
                    <span><a href="#">Записаться on-line</a></span>                    
                </td>
                <td class = "headerTd">
                    <span><a href="#">Купить сертификат</a></span>                                 
                </td>
                <td>
                        <?php
                            require "./pages/auth.php";
                            $login = getCurrentUser();//проверяем пользователя
                            if ($login === null) {
                        ?>
                                <a href = "./pages/login.php"><p class = "pLog">Вход</p></a>
                        <?php }
                            if ($login !== null) { 
                        ?>                        
                                <p class = "pLog">Добро пожаловать,<?= $login ?></p>
                                <?php 
                                    $date = getUserDate();//получаем дату рождения из формы
                                    $a = explode('-',$date); //режем на массив
                                    $b = mktime(0,0,0,$a[1],$a[2],$a[0]);
                                    $c = strtotime(date('d.m.Y'));//текущая дата
                                    
                                    if ($b==$c){//даты совпали
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
                                     
                                <a href = "./pages/logout.php"><p class = "pLog">Выйти</p></a>
                                <?php } ?>                    
                </td>
            </tr>
        </table>
    </header>

    <main>
    <?php
        
        $login = getCurrentUser();
        if ($login !== null) {
    ?>

        <div class="links">
            <a href="./pages/services.php">Наши услуги</a>
            <a href="./pages/price.php">Цены</a>
            <a href="./pages/action.php">Акции</a>
            <a href="./pages/news.php">Новости</a>
        </div>
        <?php } ?>
        <div>
            <table cellspacing="10" cellpadding="10" width = "100%">
                <tr>
                    <td>
                        <img class = "imgAbout" src="./images/main1.jpg" alt="акция скидка 25%">
                        <p>Спа-салон "Таити" приглашает вас на незабываемые процедуры по ценам, которые вас приятно удивят.</p> 
                    </td>
                    <td>
                        <img class = "imgAbout" src="./images/main5.jpg" alt="акция девичник">
                        <p>Мы применяем лучшую косметику, разработанную ведущими мировыми компаниями и доказавшую свою эффективность.</p> 
                    </td>              
                </tr>       
                <tr>
                    <td>
                        <img class = "imgAbout" src="./images/main3.jpg" alt="акция скидка 25%">
                        <p>Мы предлагаем многообразие SPA-программ на самый взыскательный вкус.</p> 
                    </td>
                    <td>
                        <img class = "imgAbout" src="./images/actia1.jpg" alt="акция ">
                        <p>Здесь вас ждут постоянные акции и скидки.</p> 
  
                    </td>              
                </tr>       
                <tr>
                    <td>
                        <img class = "imgAbout" src="./images/main2.jpg" alt="акция скидка 25%">
                        <p>Мы используем современные аппаратные методики для коррекции фигуры и омоложения кожи.</p>
                    </td>
                    <td>
                        <img class = "imgAbout" src="./images/main4.jpg" alt="акция ">
                        <p>У нас профессиональные специалисты с сертифицированными дипломами.</p> 
                    </td>              
                </tr>       
            </table>
        </div>  

    </main>

    <footer>
        <div class="links">
            <a href="#">Вакансии</a>
            <a href="./pages/contacts.php">Контакты</a>
            <a href="./pages/about.php">О нас</a>
        </div>
    </footer>
    <div class="copyright">Copyright© Спа-салон Таити 2022</div>
    
</body>
</html>