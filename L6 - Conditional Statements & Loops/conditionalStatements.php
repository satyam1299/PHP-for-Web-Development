<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements Example</title>
</head>
<body>
    <?php
    echo "<h4>If statement Example</h4>";
    $x = 12;
    if($x>2) {
        # this set of operation will be performed, if condition is true
        echo "Value of x is greater than 2";
    }

    echo "<br><h4>If else statement Example</h4>";
    $x = 4;
    if($x>5) {
        # this set of operation will be performed, if condition is true
        echo "Value of x is greater than 5";
    } else {
        # this set of operation will be performed, if condition is false
        echo "Value of x is less than or equal to 5";
    }

    echo "<br><h4>If else if statement Example</h4>";
    $x = 100;
    if($x>100) {
        # this set of operation will be performed, if condition is true
        echo "Value of x is greater than 100";
    } else if($x<100){
        # this set of operation will be performed, if condition is false
        echo "Value of x is less than 100";
    } else {
        echo "Value of x is equal to 100";
    }

    echo "<br><h4>Switch statement Example</h4>";
    $name = "Satyam";
    switch($name) {
        case 'Satyam':
            echo "Welcome Satyam";
            break;
        case 'Suraj':
            echo "Welcome Suraj";
            break;
        case 'Munni':
            echo "Welcome Munni";
            break;
        default:
            echo "Welcome Guest";
    }
    ?>
</body>
</html>