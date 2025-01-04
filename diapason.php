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
    <title>Document</title>
</head>
<body class="white-body">
<div class="blur snow-blur">
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
<div class="block1 flex">
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
                <form action="numbers.php" method="post">
                    <div class="flex">
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
                    </div>
                </form>
            </div>
    </div>
</div>
</body>
</html>
<!-- Вітаю з новим роком того хто зайшов в мій код! -->