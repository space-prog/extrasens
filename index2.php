<?php
    $sel = $_POST['sel'];
    $f = rand(1, 100);
    echo "$f рандомне, ";
    $j = floor($f / 10) * 10 + 1;
    echo "$j округлене <br>";
?>
<form action="<?php
        if($sel == $j) {
            echo "results.php";
        } else {
            echo "index2.php";
        }
    ?>" method="post">
    <select name="sel">
        <?php
            for ($i = 1; $i <=100; $i+=10) {
                $j=$i+9;
                echo "<option value='$i'>$i - $j</option>";
            }
        ?>
    </select>
    <button type="submit">
        dfg
    </button>
</form>