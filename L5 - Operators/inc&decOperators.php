<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment Decrement Operators Example</title>
</head>
<body>
    <?php
    $x = 1;
    echo "Value of X: ".$x."<br>";
    echo "Pre-increment Value: ".(++$x)."<br>";
    echo "Post-increment Value: ".($x++)."<br>";

    $x = 10;
    echo "Value of X: ".$x."<br>";
    echo "Pre-decrement Value: ".(--$x)."<br>";
    echo "Post-decrement Value: ".($x--);
    ?>
</body>
</html>