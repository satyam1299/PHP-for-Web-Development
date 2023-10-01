<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operators Example</title>
</head>
<body>
    <?php
    $arr1 = array("n1" => 3, "n2" => 5);
    $arr2 = array("n3" => 7, "n4" => 9);
    $arr3 = array("n1" => "3", "n2" => "5");
    $arr4 = array("n1" => 3, "n2" => 5);
    
    echo "<h4>Union Operator Example</h4>";
    $arrUnion = $arr1 + $arr2;
    var_dump($arrUnion);

    echo "<br><h4>Equality Operator Example</h4>";
    var_dump($arr1 == $arr2);
    var_dump($arr1 == $arr3);
    var_dump($arr1 == $arr4);

    echo "<br><h4>Identical Operator Example</h4>";
    var_dump($arr1 === $arr2);
    var_dump($arr1 === $arr3);
    var_dump($arr1 === $arr4);

    echo "<br><h4>Not equal Operator Example</h4>";
    var_dump($arr1 != $arr2);
    var_dump($arr1 <> $arr3);
    var_dump($arr1 != $arr4);

    echo "<br><h4>Not identical Operator Example</h4>";
    var_dump($arr1 !== $arr2);
    var_dump($arr1 !== $arr3);
    var_dump($arr1 !== $arr4);
    ?>
</body>
</html>