<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operator Example</title>
</head>
<body>
    <?php
    echo "<b>Example of Equal Operator</b><br>";
    $x = 10;
    $y = 20;
    $z = "10";
    var_dump($x == $y);
    var_dump($x == $z);

    echo "<br><b>Example of Identical Operator</b><br>";
    $x = 10;
    $y = 10;
    $z = "10";
    var_dump($x === $y);
    var_dump($x === $z);

    echo "<br><b>Example of Not Equal Operator</b><br>";
    $x = 10;
    $y = 10;
    $z = "10";
    $num = 20;
    var_dump($x != $y);
    var_dump($x <> $z);
    var_dump($x <> $num);

    echo "<br><b>Example of Not Identical Operator</b><br>";
    $x = 10;
    $y = 10;
    $z = "10";
    var_dump($x !== $y);
    var_dump($x !== $z);
    ?>
</body>
</html>