<?php

// PHP code to check for Palindrome string in PHP
// Using strrev()
function Palindrome($string)
{
    if (strrev($string) == $string) {
        echo $string . " is a palindrome";
    } else {
        echo $string . " is not a palindrome";
    }
}


?>

<h1> <?php echo Palindrome("Hello") ?> </h1>
<h1> <?php echo Palindrome("madam") ?> </h1>