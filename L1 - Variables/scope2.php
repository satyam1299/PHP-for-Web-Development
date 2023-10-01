<?php
$x = 5;
$y = 10;
function demo() {
    global $x, $y;
    $x = $x+$y;
}
demo();
echo "X: $x";
// ?>