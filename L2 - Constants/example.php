<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <?php
    define("NAME", "Satyam"); // by deafult it is 'false'
    // define("AGE", "23", true); 

    echo "My name: ".NAME."<br>";
    echo "My name: ".name."<br>"; // not work
    // echo "My age: ".AGE."<br>";
    // echo "My age: ".age."<br>";

    ?>
</body>
</html>