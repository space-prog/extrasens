<?php
    session_start();
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/results.css">
    <title>Document</title>
</head>
<body>
<div class="blur">
    <div class="zindex">
        <img src="images/307887.svg" alt="Сніжинка" class="svg1">
        <img src="images/307887.svg" alt="Сніжинка" class="svg2">
        <img src="images/307887.svg" alt="Сніжинка" class="svg3">
        <img src="images/307887.svg" alt="Сніжинка" class="svg4">
        <img src="images/307887.svg" alt="Сніжинка" class="svg5">
        <img src="images/307887.svg" alt="Сніжинка" class="svg6">
        <img src="images/307887.svg" alt="Сніжинка" class="svg7">
        <img src="images/307887.svg" alt="Сніжинка" class="svg8">
        <img src="images/307887.svg" alt="Сніжинка" class="svg1">
        <img src="images/307887.svg" alt="Сніжинка" class="svg2">
        <img src="images/307887.svg" alt="Сніжинка" class="svg3">
        <img src="images/307887.svg" alt="Сніжинка" class="svg4">
        <img src="images/307887.svg" alt="Сніжинка" class="svg5">
        <img src="images/307887.svg" alt="Сніжинка" class="svg6">
        <img src="images/307887.svg" alt="Сніжинка" class="svg7">
        <img src="images/307887.svg" alt="Сніжинка" class="svg8">
        <img src="images/307887.svg" alt="Сніжинка" class="svg3">
        <img src="images/307887.svg" alt="Сніжинка" class="svg4">
        <img src="images/307887.svg" alt="Сніжинка" class="svg5">
        <img src="images/307887.svg" alt="Сніжинка" class="svg6">
        <img src="images/307887.svg" alt="Сніжинка" class="svg7">
        <img src="images/307887.svg" alt="Сніжинка" class="svg8">
        <img src="images/307887.svg" alt="Сніжинка" class="svg6">
        <img src="images/307887.svg" alt="Сніжинка" class="svg7">
    </div>
</div>
    <div class="flexcenter">
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
                <button type="submit">Зіграти знову</button>
            </form>
        </div>
    </div>
</body>
</html>
<!-- Вітаю з новим роком того хто зайшов в мій код -->