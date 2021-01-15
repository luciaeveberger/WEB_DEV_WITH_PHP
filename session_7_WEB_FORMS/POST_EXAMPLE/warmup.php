<?php
  # Solution to Lecture 17 warmup
  header("Content-type: text/plain");
  $course = "CSE154";
  $month = "November";
  $abbr = substr($month, 0, 3);
  $yesterday = "4";

  echo "Hello {$course} student!\n";
  echo "It's Monday, {$abbr}. " . ($yesterday + 1) . "th!";
?>
