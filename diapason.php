<?php
    session_start();
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/diapason.css">
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
    
        <?php
            $j = floor($_SESSION['rand'] / 10) * 10 + 1;
            // echo "$j округлене <br>";
        ?>
        <form action="numbers.php" method="post">
            <div class="flexcenter">
                <label class="arrow">
                    <select name="choise">
                        <?php
                            $x = $j + 9;
                            for($j; $j <= $x; $j++) {
                                echo "<option value='$j'>$j</option>";
                            }
                        ?>
                    </select>
                </label>
                <button type="submit">Відправити</button>
            </div>
        </form>
</div>
</body>
</html>
<!-- Вітаю з новим роком того хто зайшов в мій код -->