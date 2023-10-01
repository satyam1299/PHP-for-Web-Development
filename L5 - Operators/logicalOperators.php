<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators Example</title>
</head>
<body>
    <?php
    echo "<b>Example of AND operator</b><br>";
    $x = 5;
    $y = 4;
    $z = 3;
    var_dump($x > $z && $y > $z);

    echo "<br><b>Example of OR operator</b><br>";
    $x = 1;
    $y = 2;
    $z = 3;
    var_dump($x > $z or $y > $z);

    echo "<br><b>Example of XOR operator</b><br>";
    $x = 5;
    $y = 1;
    $z = 3;
    var_dump($x > $z xor $y > $z);
    
    echo "<br><b>Example of AND operator</b><br>";
    $x = 5;
    $y = 2;
    $z = 3;
    var_dump(!($x > $z));
    ?>
</body>
</html>