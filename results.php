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
        $numbers = $_POST['numbers'];
        $rand = $_SESSION['rand'];
        if($numbers==$rand) {
            echo "Ви виграли!! ";
        } else {
            echo "Повезе наступного разу, ";
        }
        echo "Загадане число: " . $_SESSION['rand'];
    ?>
</body>
</html>