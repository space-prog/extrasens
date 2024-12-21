
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
        if(!isset($_SESSION['rand'])) {
            $rand = $_SESSION['rand'] = rand(1,10);
        } else {
            $rand = $_SESSION['rand'];
        }

        if (!isset($_SESSION["attempts"])) {
            $attempts = $_SESSION['attempts'] = 0;
        } else {
            $attempts = $_SESSION["attempts"];
        }
        
        if (isset($_POST['choise'])) {
            $choise = $_POST['choise'];
            if ($choise == $_SESSION['rand']) {
                echo "You win, ";
            } else {
                echo "try again, ";
            }
            ++$_SESSION["attempts"];
            echo $_SESSION['attempts'] . " спроб використано";
        }
        
    ?>
    <form action="
        <?php
            if($_SESSION['attempts'] >= 3) {
                echo "results.php";
            } else {
                echo "index.php";
            }
        ?>
    " method="post"> 
        <select name="choise">
            <?php
                for($i = 1; $i<=10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <button type="submit">Перевірка</button>
    </form>
</body>