<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators Example</title>
</head>
<body>
    <?php
    $x = 12;
    $y = 27;
    $z = 3;
    $str = "5";

    echo "Addition of Num 'X' and String: ".$x+$str."<br>";
    echo "Sum of X and Y: ".$x+$y."<br>";
    echo "Difference of X and Y: ".$x-$y."<br>";
    echo "Difference of Y and X: ".$y-$x."<br>";
    echo "Multiplication of X and Y: ".$x*$y."<br>";
    echo "Division of X and Y: ".(int)($x/$y)."<br>";
    echo "Division of Y and Z: ".$y/$z."<br>";
    echo "Remainder of X and Y: ".$x%$y."<br>";
    echo "Remainder of Y and Z: ".$y%$z."<br>";

    ?>
</body>
</html>