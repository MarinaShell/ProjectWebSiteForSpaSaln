<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $login = getCurrentUser();
        if ($login !== null) {
    ?>
    <div class="links">
        <a href="services.php">Наши услуги</a>
        <a href="price.php">Цены</a>
        <a href="action.php">Акции</a>
        <a href="news.php">Новости</a>
    </div>
    <?php } ?>
</body>
</html>