<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unset Example</title>
</head>
<body>
    <?php
    $name = 'Satyam';
    $last_name = "";
    echo("Name: ".$name);
    echo($last_name); // print nothing
    unset($last_name); //deleting variable $last_name
    echo($last_name); //Error: $last_name undefined variable
    ?>
</body>
</html>