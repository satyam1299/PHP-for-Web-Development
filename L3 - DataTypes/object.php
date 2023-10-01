<?php
class Details {
    var $name;
    function Details($name = "John Wick") {
        $this->name = $name;
    }
    function display() {
        return $this->name;
    }
}
$hey = new Details();
$hey.display();
?>