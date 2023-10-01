<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Assignment Operators Example</title>
</head>
<body>
    <?php
    echo "<b>Example of Basic Assignment Operator</b><br>";
    $x = 10;
    echo "Value of x: $x";
    $y = $x;
    echo "Value of y: $y";

    echo "<br><b>Example of Addition Assignment Operator</b><br>";
    $x = 10;
    $x += 20;
    echo "Value of x: $x";

    echo "<br><b>Example of Subtraction Assignment Operator</b><br>";
    $x = 10;
    $x -= 5;
    echo "Value of x: $x";

    echo "<br><b>Example of Multiplication Assignment Operator</b><br>";
    $x = 5;
    $x *= 24;
    echo "Value of x: $x";

    echo "<br><b>Example of Division Assignment Operator</b><br>";
    $x = 100;
    $x /= 2;
    echo "Value of x: $x";

    echo "<br><b>Example of Modulos Assignment Operator</b><br>";
    $x = 10;
    $x %= 4;
    echo "Value of x: $x";
    ?>
</body>
</html>