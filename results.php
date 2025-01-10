<?php
    session_start();
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="white-body">
<div class="blur snow-blur">
    <div class="zindex">
        <img src="images/307887.svg" alt="Сніжинка" class="svg1 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg2 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg3 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg4 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg5 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg6 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg7 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg8 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg1 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg2 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg3 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg4 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg5 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg6 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg7 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg8 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg3 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg4 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg5 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg6 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg7 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg8 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg6 svg">
        <img src="images/307887.svg" alt="Сніжинка" class="svg7 svg">
    </div>
</div>
    <div class="flex height">
        <div class="wrap">
            <div class="php">
                <?php
                    $numbers = $_SESSION['numbers'];
                    $rand = $_SESSION['rand'];
                    if($numbers==$rand) {
                        echo "<p class='fz24'>Ви виграли!! </p>";
                    } else {
                        echo "<p class='fz24'>Повезе наступного разу, </p>";
                    }
                    echo "<p class='fz24'>Загадане число: " . $_SESSION['rand'] . "</p>";
                ?>
            </div>
            <div class="form">
                <form action="index.php" method="post">
                    <button type="submit" value="clear" name="clear" class="button-lightblue">Зіграти знову</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!-- Вітаю з новим роком того хто зайшов в мій код -->