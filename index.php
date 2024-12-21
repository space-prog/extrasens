</html>
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

        if (isset($_SESSION["rand"]) === false) {
            $_SESSION["rand"] = rand(0, 10);
        }

        if (isset($_POST['choise'])) {
            $choise = $_POST['choise'];
            if ($choise == $_SESSION['rand']) {
                echo "You win";
            } else {
                echo "try again";
            }
            $attempts = $_POST['attempts'];
            $attempts++;
            echo $attempts;
        }
        
        if (isset($_POST['choise'])) {
            $attempts++;
        }
        
    ?>
    <form action="index.php">
        <select name="choise">
            <?php
                for($i = 0; $i<=10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <input type='hidden' name='attempts' value='0'>
        <button type="submit">Перевірка</button>
    </form>
</body>