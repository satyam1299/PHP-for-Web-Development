<?php
function demo() {
    static $x = 0;
    echo "X: $x<br>";
    $x++;
}
demo();
demo();
?>