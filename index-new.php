<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<select>
    <?php
        for ($i = 1; $i <=100; $i+=10) {
            $j=$i+9;
            echo "<option>$i - $j</option>";
        }
    ?>
</select>
</body>
</html>