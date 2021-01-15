<?php
$name = $_GET["name"];
$age = (int) $_GET["age"];
$dog_age = $age * 7;
echo "Hi {$name}! You are {$age} years old!\n";
echo "That's {$dog_age} in dog years!";
?>