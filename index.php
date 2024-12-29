
<?php
    session_start();
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <div class="blur">
        <span class="bulb1"></span>
        <span class="bulb2"></span>
    </div>
        <?php
            if(!isset($_SESSION['rand'])) {
                $rand = $_SESSION['rand'] = rand(1,100);
            } else {
                $rand = $_SESSION['rand'];
            }
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
        ?>
        <div class="zindex">
            <label class="arrow">
                <select name="" id="">
                <?php
                    for ($i = 1; $i <=100; $i+=10) {
                        $j=$i+9;
                        echo "<option value='$i'>$i - $j</option>";
                    }
                ?>
                </select>
            </label>
            <form action="diapason.php" method="post">
                <button type="submit">Перевірка</button>
            </form>
        </div>
</body>