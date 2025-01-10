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
<div class="block1 flex height">
    <div class="wrap">
            <div>
                <?php
                    $select = $_POST['select'];
                    $j = floor($_SESSION['rand'] / 10) * 10 + 1;
                    if ($select==$j) {
                        echo "<p>Вітаю, ти обрав вірний діапазон, тепер обери з нього число</p>";
                    } else {
                        echo "<p>Ти обрав неправильний діапазон, але я даю тобі змогу вибрати число із правильного діапазону</p>";
                    }
                    // echo "$j округлене <br>";
                ?>
            </div>
            <div class="block2">
                <form action="numbers.php" method="post" class="flex">
                        <label class="arrow arrow-lightblue label-border">
                            <select name="choise">
                                <?php
                                    $x = $j + 9;
                                    for($j; $j <= $x; $j++) {
                                        echo "<option value='$j'>$j</option>";
                                    }
                                ?>
                            </select>
                        </label>
                        <button type="submit" class="button-lightblue">Відправити</button>
                </form>
            </div>
    </div>
</div>
</body>
</html>
<!-- Вітаю з новим роком того хто зайшов в мій код! -->