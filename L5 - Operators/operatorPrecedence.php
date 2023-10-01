<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Precedence Example</title>
</head>
<body>
    <?php
    $x = 1+2*3;
    echo "Value of x is $x<br>";

    $y = (1+2)*3;
    echo "Value of y is $y<br>";

    $num1 = 4;
    $num2 = 15;
    $result = $num1++ + --$num2; //here num1 will be 4 and num2 will be 14
    echo "Final result: $result<br>";

    /*
    $a = 1<2>3; //non-associate --> Error: Syntax error
    echo "$a<br>";
    */
    $a = 1<=2==3; // Equal operator has a less precedence than Less than equalsTo operator
    echo "$a<br>";
    var_dump($a);

    ?>
</body>
</html>