<?php
echo "Hello";
echo "Your name is {$_GET["name"]}";

if( $_GET["name"] || $_GET["age"] ) {
    echo "Your name is {$_GET["name"]}";
    echo "Your age is {$_GET["age"]}";

}