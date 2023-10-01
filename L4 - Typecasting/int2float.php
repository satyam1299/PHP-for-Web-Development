<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition of 2 different types of variables</title>
</head>
<body>
    <?php
    $x = 1;
    $y = 1.1;
    
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    $x = $x + $y;
    echo "Sum: $x";
    echo "<br>";
    var_dump($x);
    ?>
</body>
</html>