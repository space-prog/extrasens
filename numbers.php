<?php
    session_start();
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/numbers.css">
    <title>Document</title>
</head>
<body>
    <div class="blur">  
        <span class="bulb1"></span>
        <span class="bulb2"></span>
    </div>
    <?php
        $rand = $_SESSION['rand'];
        // echo "$rand";
        $ostacha = $rand % 10;
        // echo " $ostacha";
        if ($ostacha < 6 && $ostacha != 0) {
            $f = floor($rand/10) * 10 + 1;   
        } else {
            $f = ceil($rand/10) * 10 + 1 - 5;
        }
        // echo $_SESSION['attempts'];
        // echo "F: $f";   
        if(isset($_SESSION['answers'])) {
            $answers = $_SESSION['answers'];
        } else {
            $answers = $_SESSION['answers'] = [];
        } 
        if(isset($_POST['numbers'])) {
            $numbers = $_POST['numbers'];
            $_SESSION['numbers'] = $numbers;
            ++$_SESSION['attempts'];
            array_push($_SESSION['answers'], $numbers);
        }
    ?>
    <form action="
    numbers.php
    <?php
        if(isset($_POST['numbers'])) {
            if($numbers==$rand || $_SESSION['attempts']>=3) {
                header('Location: results.php');
            }
        }
    ?>" method="post">
    <div class="zindex">
        <label class="arrow">
            <select name="numbers">
                <?php
                    $x = $f + 4;
                    for($f; $f <= $x; $f++) {
                        // echo "<option value='$f'>$f</option>";
                        if(in_array($f, $_SESSION['answers'])) {
                            echo "<option value='$f' disabled>$f</option>";
                        } else {
                            echo "<option value='$f'>$f</option>";
                        }
                    }
                ?>
            </select>
        </label>
        <button type="submit">Перевірка</button>
    </div>
    </form>
            
</body>
</html>
<!-- Вітаю з новим роком того хто зайшов в мій код -->