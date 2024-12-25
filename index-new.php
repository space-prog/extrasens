
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
        echo $_SESSION['rand'];

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
    <form action="
        <?php
            if($_SESSION['attempts'] >= 15) {
                echo "results.php";
            } else {
                echo "index.php";
            }
        ?>
    " method="post"> 
        <select name="choise">
            <?php
                for($i = 1; $i<=10; $i++) {
                    if(in_array($i, $_SESSION['answers'])) {
                        echo "<option value='$i' disabled>$i</option>";
                        // var_dump($_SESSION['answers'][$i]);
                    } else {
                        echo "<option value='$i'>$i</option>";
                    }
                }
            ?>
        </select>
        <button type="submit">Перевірка</button>
    </form>
</body>