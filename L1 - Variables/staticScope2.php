<?php
$x= 20;
function demo() {
    static $x = 10;
    echo "Value of x: ".$x."<br>";
    $x++;
}
demo();
demo();
demo();
?>
