<?php
$colors = array("red", "green", "blue", "yellow");
echo "Count of array " . count($colors) . "<br>";

sort($colors);
echo "<br>";
print_r($colors);

$guitars = ['Warvick', 'Gibson', 'Fender'];
rsort($guitars);
echo "<br>";
print_r($guitars);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

asort($age);
echo "<br>";
print_r($age);



