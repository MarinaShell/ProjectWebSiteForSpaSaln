<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Спа-салон Таити</title>
    <link rel="stylesheet" href = "../css/style.css">
</head>
<body>
    <?php require "header.php"; ?>

    <main>
        <?php require "menu.php"; ?>

        <br>
        <br>
        <div>
            <table class = "tablePrice">
                <caption>Наши цены</caption>
                <tr>
                    <td class = "mainTd_v">
                        <h2>Вид массажа</h2>
                    </td>
                    <td class = "mainTd_p">
                        <h2>30 минут</h2> 
                    </td>
                    <td class = "mainTd_p">
                        <h2>60 минут</h2> 
                    </td>
                    <td class = "mainTd_p">
                        <h2>90 минут</h2> 
                    </td>                
                </tr>
                <tr>
                    <td class = "mainTd_v">
                        <h2>Расслабляющий массаж</h2>
                    </td>
                    <td>
                        <h2>1000 р</h2> 
                    </td >
                    <td class = "mainTd">
                        <h2>1500 р</h2> 
                    </td>
                    <td class = "mainTd">
                        <h2>2000 р</h2> 
                    </td>                
                </tr>
                <tr>
                    <td class = "mainTd_v">
                        <h2>Общий оздоровительный массаж</h2>
                    </td>
                    <td class = "mainTd">
                        <h2>1100 р</h2> 
                    </td>
                    <td class = "mainTd">
                        <h2>1700 р</h2> 
                    </td>
                    <td class = "mainTd">
                        <h2>2500 р</h2> 
                    </td>                
                </tr>
                <tr>
                    <td class = "mainTd_v">
                        <h2>Спортивный массаж</h2>
                    </td>
                    <td class = "mainTd">
                        <h2>1200 р</h2> 
                    </td>
                    <td class = "mainTd">
                        <h2>2000 р</h2> 
                    </td>
                    <td class = "mainTd">
                        <h2>3000 р</h2> 
                    </td>                
                </tr>
            </table>
        </div>  
    </main>

    <?php require "footer.php"; ?>
    
</body>
</html>