
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
        <span class="bulb bulb1"></span>
        <span class="bulb bulb2"></span>
    </div>
    <?php           
            if(isset($_POST["clear"])) {
                $_SESSION["answers"] = [];
                $rand = $_SESSION['rand'] = rand(1,100);
            }

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
        <div class="flex height">
            <div class="zindex">
                <div class="block2">
                    <p>Вітаю тебе у грі екстрасенси, Я загадав число від одного до ста. Спробуй вгадати діапазон у якому знаходиться це число</p>
                </div>
                <div class="block1">
                    <form action="diapason.php" method="post" class="flex">
                    <label class="arrow arrow-lightblue">
                        <select name="select" id="">
                        <?php
                            for ($i = 1; $i <=100; $i+=10) {
                                $j=$i+9;
                                echo "<option value='$i'>$i - $j</option>";
                            }
                        ?>
                        </select>
                    </label>
                    <button type="submit" class="button-purple">Перевірка</button>
                    </form>
                </div>
            </div>
        </div>
</body>
<!-- Вітаю з новим роком того хто зайшов в мій код -->