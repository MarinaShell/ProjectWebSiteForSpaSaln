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
                    <a href="#">Записаться on-line</a>                    
                </td>
                <td class = "headerTd">
                    <a href="#">Купить сертификат</a>                                 
                </td>
                <td>
                        <?php
                        require "./pages/auth.php";
                        $login = getCurrentUser();
                        if ($login === null) { ?>
                        <a href = "./pages/login.php"><p class = "pLog">Вход</p></a>
                        <?php }
                        if ($login !== null) { ?>                        
                        <p class = "pLog">Добро пожаловать,<?= $login ?></p>
                        <p class = "pLog">До вашего дня рождения осталось:</p>
                        <p><?php 
                       // $d1=strtotime("July 04");
                       // $d2=ceil(($d1-time())/60/60/24);
                       // echo "There are " . $d2 ." days until 4th of July.";

                        $date = new DateTime();
                        $date->setTimestamp(strtotime($_POST['dateOfBirth']));

                        echo $date->format('d.m.Y');
                        //$date = '12.04.1983'; //дата рожденияg
$a = explode('.',$date->format('d.m.Y')); //режем на массив
$b = mktime(0,0,0,$a[1],$a[0],date('Y'));
$c = strtotime(date('d.m.Y'));
if ($b<$c){ //проверяем было ли д.р. в этом году
    echo (($c-mktime(0,0,0,$a[1],$a[0],date('Y')-1))/86400);
}
else echo (($c-$b)/86400)*-1;

                            //$adate = new DateTime();
                            //$adate->setTimestamp(strtotime($_POST['dateOfBirth']));
                            //$day1 = strtotime($_POST['dateOfBirth']);
                            //$new_date =  date('Y-m-d', strtotime($_POST['dateOfBirth']));
                            //echo $new_date;
                            //echo $adate."<br>";
                            //$date1=time(); //Первую дату в секунды
                            //echo $date1."34<br>"; 
                            //$date2=explode('.','15.08.2022');  
                            //$date2=time(0,0,0,$t[1],$t[0],$t[2]);//Вторую дату в секунды 
                            
                            $date3=$date1-$date2; //Вычитаем 
                            $date3=$date3/86400; //Разницу - в дни
                            //echo $date1."<br>";
                            //echo $date2."<br>";
                            //echo $date3;
                            ?>
                        </p>
                        <br>
                        <a href = "./pages/logout.php"><p class = "pLog">Выйти</p></a>
                        <?php } ?>                    
                </td>
            </tr>
        </table>
    </header>

    <main>
        <div class="links">
            <a href="./pages/services.php">Наши услуги</a>
            <a href="./pages/price.php">Цены</a>
            <a href="./pages/action.php">Акции</a>
            <a href="./pages/news.php">Новости</a>
        </div>

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