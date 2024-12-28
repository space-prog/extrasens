
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
            $rand = $_SESSION['rand'] = rand(1,100);
        } else {
            $rand = $_SESSION['rand'];
        }
        // echo $_SESSION['rand'] . "<br>";
        // $sel = $_POST['sel'];
        

        if (!isset($_SESSION["attempts"])) {
            $attempts = $_SESSION['attempts'] = 0;
        } else {
            $attempts = $_SESSION["attempts"];
        }
        
        if(isset($_SESSION['answers'])) {
            $answers = $_SESSION['answers'];
        } else {
            $answers = $_SESSION['answers'] = [];
        }

        if (isset($_POST['choise'])) {
            $choise = $_POST['choise'];
            array_push($_SESSION['answers'], $choise);
            if ($choise == $_SESSION['rand']) {
                echo "You win, ";
            } else {
                echo "try again, ";
            }
            ++$_SESSION["attempts"];
            echo $_SESSION['attempts'] . " спроб використано";
        }
        // echo "<pre>";
        // var_dump($_SESSION['answers']);
        
    ?>
<select name="" id="">
    <?php
        for ($i = 1; $i <=100; $i+=10) {
            $j=$i+9;
            echo "<option value='$i'>$i - $j</option>";
        }
    ?>
</select>
    <form action="diapason.php" method="post">
        <button type="submit">Відправити</button>
    </form>
</body>