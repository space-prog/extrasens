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
        // echo "$rand";
        $ostacha = $rand % 10;
        // echo " $ostacha";
        if ($ostacha < 6 && $ostacha != 0) {
            $f = floor($rand/10) * 10 + 1;   
        } else {
            $f = ceil($rand/10) * 10 + 1 - 5;
        }
        // echo "F: $f";   
        if(isset($_SESSION['answers'])) {
            $answers = $_SESSION['answers'];
        } else {
            $answers = $_SESSION['answers'] = [];
        } 
        if(isset($_POST['numbers'])) {
            $numbers = $_POST['numbers'];
            array_push($_SESSION['answers'], $numbers);
        }
    ?>
    <form action="<?php
        if(isset($_POST['numbers'])) {
            if($numbers==$rand) {
                echo "results.php";
            } else {
                echo "numbers.php";
            }
        }
    ?>" method="post">
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
        <button type="submit">Перевірка</button>
    </form>
            
</body>
</html>
