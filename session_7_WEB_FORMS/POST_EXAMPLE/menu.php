<?php
$drinks = array("coffee", "tea", "water");
$bakery = array("bagels", "toast", "waffles", "poptarts");

# TODO: Write a function to_string that takes an array as a parameter
# and prints the contents of that array in a bracketed format:
# For example, to_string($drinks) would return: 
# "[coffee, tea, water]"
function to_string($arr) {
  $result = "[";
  for ($i = 0; $i < count($arr) - 1; $i++) {
    $result .= $arr[$i] . ", ";
  }
  if (count($arr) > 0) {
    $result .= $arr[count($arr) - 1];
  }
  return $result . "]";
}

echo to_string($drinks);
echo to_string($bakery);

?>
