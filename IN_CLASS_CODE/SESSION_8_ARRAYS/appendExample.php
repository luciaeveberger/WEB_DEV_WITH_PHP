<?php
$family = array("Fred", "Wilma");
$family[] = "Pebbles"; // $family[2] is "Pebbles"
$family[] = "Examplevalue"; // $family[2] is "Pebbles"

//foreach ($family as $value) {
//    // this value, this value, this value until you read the end
//    echo "Processing [$value]" . "<br>";
//}

print_r($family);