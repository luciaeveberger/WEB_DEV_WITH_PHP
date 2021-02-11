<?php

function str_reverse_native($string)
{
    $length = strlen($string);
    for ($i = ($length - 1); $i >= 0; $i--) {
        echo $string[$i];
    }
}

function display_string($string){
    echo $string;
}
?>

<h3>
    <?php
        echo display_string("Explode");
        echo "</br>";
        echo str_reverse_native("Explode");
        define("EXAMPE", 2.0);
        ?>

</h3>
