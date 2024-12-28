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
        echo "$j округлене <br>";
    ?>
    <form action="5numbers.php" method="post">
        <select name="">
            <?php
                $x = $j + 9;
                for($j; $j <= $x; $j++) {
                    echo "<option value='$j'>$j</option>";
                }
            ?>
        </select>
    </form>
</body>
</html>