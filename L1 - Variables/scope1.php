<?php
$x = 10; // global scope
function demo() {
    $y = 20; // local scope
    echo "X: $x<br>";
    echo "Y: $y<br>";
}
demo();
echo "X: $x<br>";
echo "Y: $y";
?>