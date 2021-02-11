<?php

# declaring our array
$addresses = array("spam.org", "friendstogether@gmail", "helloall.world.com");
# $addresses = ['spam.org', 'friends...', 'blah.com;];
# iterating through our array
foreach ($addresses as $value) {
    echo "Processing [$value]" . "<br>";

}
echo " ******* " . "<br>";

$end_point = count($addresses);
#$end_point = 10;
for ($i = 0; $i < $end_point; $i++) {
    echo $addresses[$i]  . "<br>";
}