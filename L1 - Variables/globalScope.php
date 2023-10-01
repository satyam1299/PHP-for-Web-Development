<?php
$x = 20;
$y = 50;
function demo() {
    global $x, $y;
    echo "<h3>Displaying values of x and y within the function</h3>";
    echo "Value of x: ".$x."<br>";
    echo "Value of y: ".$y."<br>";
}
demo();
echo "<h3>Displaying values of x and y outside the function</h3>";
echo "Value of x: ".$x."<br>";
echo "Value of y: ".$y."<br>";
?>
