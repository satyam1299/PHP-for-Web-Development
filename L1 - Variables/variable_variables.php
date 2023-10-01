<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable variables example</title>
</head>
<body>
    <?php
    $name = $friend_name;
    $$name = "Shreyash D. Mane";
    print_r($friend_name)
    ?>
</body>
</html>