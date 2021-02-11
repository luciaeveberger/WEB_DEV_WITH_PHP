<?php
  # This is our first basic PHP web service to say hello given a name query parameter!
  header("Content-type: text/plain");
  
  # We'll learn Wednesday how to check whether $_GET parameters are set for error-handling!
  $name = $_GET["name"];
  echo "Hello $name!";
?>
