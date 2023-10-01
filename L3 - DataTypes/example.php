<?php
echo "<h4>Integer examples:</h4>";
$x = 10;
var_dump($x);
$x = -145;
var_dump($x);
$x = 047;
var_dump($x);
$x = 0xBB;
var_dump($x);

echo "<br><h4>Float examples:</h4>";
$y = 5.4;
var_dump($y);
$y = 3.555567;
var_dump($y);
$y = 2.4e3;
var_dump($y);

echo "<br><h4>Boolean examples:</h4>";
$x = true;
var_dump($x);
$x = false;
var_dump($x);

echo "<br><h4>String example:</h4>";
$x = "Here are exples to get familiar with the datatype concept.";
var_dump($x);

echo "<br><h4>Array examples:</h4>";
$name = array("Rashid", "Ahmed", "Manoj");
var_dump($name);

echo "<br><h4>Object example:</h4>";
class Test {
    public $name; // Use "public" instead of "var" to define properties in modern PHP
    function __construct($name = "Micky") { // Use "__construct" instead of "function Test" for constructors
        $this->name = $name;
    }
    function display() {
        return $this->name;
    }
}
function printData($obj) {
    foreach(get_object_vars($obj) as $key => $value) { //key-value considered as prop-value
        echo "\t$key = $value\n";
    }
}
$data = new Test();
echo "Micky properties";
printData($data);
?>