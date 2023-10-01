<?php
$x= 20;
function demo() {
    static $x;
    echo "Value of x: ".$x."<br>";
    $x++;
}
demo();
demo();
demo();
?>
