<?php

# declaring our array
$addresses = array("spam.org", "friendstogether@gmail", "helloall.world.com", "spam.com");
# $addresses = ['spam.org', 'friends...', 'blah.com;];
# iterating through our array => 'read only appraoch: just looking at the contents of the array'
foreach ($addresses as $value) {
    // this value, this value, this value until you read the end
    echo "Processing [$value]" . "<br>";
    $addresses[$value] = ;;
}

echo " ******* " . "<br>";

$end_point = count($addresses);
#$end_point = 10;
for ($i = 0; $i < $end_point; $i++) {
    // 0: this value
    // 1: this value
    // 2: this value
    $addresses[i] = "";
    echo $addresses[$i]  . "<br>";
}