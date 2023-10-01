<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operators Example</title>
</head>
<body>
    <?php
    echo "<b>Example of Concatenation Operator</b><br>";
    $firstname = "Satyam";
    $lastname = "Kumar";
    $name = $firstname." ".$lastname;
    echo $name;

    echo "<br><b>Example of Concatenation Assignment Operator</b><br>";
    $statement = "I want to make my parents feel ";
    $statement .= "proud on me.";
    echo $statement;
    ?>
</body>
</html>