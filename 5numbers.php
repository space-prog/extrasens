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
        $rand = $_SESSION['rand'];
        if ($rand % 10) {
            
        } else {
            $f = round($rand/10) * 10 + 1 - 5;
        }
        echo round(5);
    ?>
</body>
</html>