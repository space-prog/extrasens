<?php
    session_start();
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="dark-body">
    <div class="blur circle-blur">  
        <span class="bulb bulb3"></span>
        <span class="bulb bulb4"></span>
    </div>
    <?php
        $rand = $_SESSION['rand'];
        $choise = $_POST['choise'];
        
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
    <div class="block1 flex height">
        <div class="wrap">
            <div>
                <?php
                    if($choise==$rand) {
                        echo "<p>Ви обрали вірне число, тепер оберіть його із цих п'яти чисел</p>";
                    } else {
                        echo "<p>Ви обрали невірне число, ось п'ять найближчих до загадоного чисел. Спробуйте обрати вірне число</p>";
                    }
                ?>
            </div>
            <div class="block2">
                <form action="
                numbers.php
                <?php
                    if(isset($_POST['numbers'])) {
                        if($numbers==$rand || $_SESSION['attempts']>=3) {
                            header('Location: results.php');
                        }
                    }
                    ?>" method="post" class="flex ">
                    <label class="arrow arrow-yellow">
                        <select name="numbers">
                            <?php
                                $x = $f + 4;
                                for($f; $f <= $x; $f++) {
                                    // echo "<option value='$f'>$f</option>";
                                    if(in_array($f, $_SESSION['answers'])) {
                                        echo "<option value='$f' disabled>$f - Це число вже було вибрано</option>";
                                    } else {
                                        echo "<option value='$f'>$f</option>";
                                    }
                                }
                            ?>
                        </select>
                    </label>
                    <button type="submit" class="button-yellow">Перевірка</button>
                </form>
            </div>
        </div>
    </div>
            
</body>
</html>
<!-- Вітаю з новим роком того хто зайшов в мій код -->