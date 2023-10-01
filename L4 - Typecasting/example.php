<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type conversion in PHP</title>
</head>
<body>
    <?php
    $num = 4;

    $intValue = (int)$num;
    $floatValue = (float)$num;
    $stringValue = (String)$num; 

    var_dump($intValue);
    echo "<br>";
    var_dump($floatValue);
    echo "<br>";
    var_dump($stringValue);
    ?>
</body>
</html>