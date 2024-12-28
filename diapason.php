<?php
    session_start();
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $j = floor($_SESSION['rand'] / 10) * 10 + 1;
        // echo "$j округлене <br>";
    ?>
    <form action="numbers.php" method="post">
        <select name="choise">
            <?php
                $x = $j + 9;
                for($j; $j <= $x; $j++) {
                    echo "<option value='$j'>$j</option>";
                }
            ?>
        </select>
        <button type="submit">Відправити</button>
    </form>
</body>
</html>