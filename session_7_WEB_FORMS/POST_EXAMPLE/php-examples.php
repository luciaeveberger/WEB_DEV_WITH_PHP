<?php
/**
 * Basic Code Examples in PHP
 * Lecture 17: 11.05.18
 * ---------------------------
 * - Strings
 * - Loops
 * - Arrays
 * - Functions
 */

header("Content-type: text/plain");

# -----------------------------------------------------
# Review: Variables in PHP
# -----------------------------------------------------
# - always start with $ (both when defining and using!)
# let name = "Mowgli Hovik"; (JS example)
# String name = "Mowgli Hovik"; (Java example)
$name = "Mowgli Hovik"; # PHP example

# -----------------------------------------------------
# Strings
# -----------------------------------------------------
# -----------------------------------------------------
# Common String Functions
# -----------------------------------------------------
# trim - a handy way to remove spaces on the ends of strings!
$spaced_string = "  This is a string    ";
echo "Before trim: " . strlen($spaced_string) . "\n";
echo "After trim:  " . strlen(trim($spaced_string)) . "\n";

# -----------------------------------------------------
# For Loops
# -----------------------------------------------------
# Very similar to JS! But remember to use $ for variables
/*
for ($i = 0; $i < 10; $i++) {
  echo "$i squared is " . $i * $i . "\n";
}
 */

# -----------------------------------------------------
# If/Else
# -----------------------------------------------------
# Very similar to JS!
/*
$a = 1;
$b = 2;
if ($a < $b) {
  echo "a is less than b!";
} else if ($b < $a) {
  echo "b is less than a!";
} else {
  echo "b equals a!";
}
 */
# -----------------------------------------------------
# Functions
# -----------------------------------------------------
# Example:
function item_cost($qty, $unit_cost, $tax) {
  $total_cost = $qty * $unit_cost;     # e.g. 4 * 1.25 = 6.00
  $tax_amount = $total_cost * $tax;    # e.g. 6.00 * 0.1 = 0.60
  $result = $total_cost + $tax_amount; # e.g. 6.00 + 0.6 = 6.60
  return $result;
}

# -----------------------------------------------------
# Arrays
# -----------------------------------------------------
/*
 - array() # create empty
 - array(val0, val1, val2, ...) # create filled
 - $arr[0]; # get element value at index 0
 - $arr[0] = "foo"; # set element value to "foo" at index 0
 - $arr[] = "bar"; # append "bar" to end of array
 - print array using print_r($arr);
*/
$pups = array("Mowgli", "Abby", "Archie", "Bailey");
$pups[] = "Ruby";
print_r($pups);
echo "Size of pups: " . count($pups);

# -----------------------------------------------------
# Common Array Functions
# -----------------------------------------------------
# count($arr) - returns size of $arr
# print_r($arr) - prints (not so great) array representation
# array_pop($arr) - remove/return element at end of $arr
# array_push($arr, $val) - add $val at end of $arr
# array_shift($arr) - remove/return element at start of $arr
# array_unshift($arr, $val) - add $val at start of $arr
# sort($arr) - sort $arr on natural ordering
# array_reverse($arr) - reverse $arr
# $arr2 = array_slice($arr, $start, $end) - return array between $start/$end indices

# -----------------------------------------------------
# Associative Arrays
# -----------------------------------------------------
/*
- We will use these to build JSON output for our PHP web services!
- Analogous to Maps in Java, dictionaries in Python
- array(key0 => val0, key1 => val1, ...) # create
- $arr[$keyname] = $val; # sets key to be value (may overwrite)
*/
/*
$petages = array();
$pets["Spot"] = 16;
$pets["Mowgli"] = 1;

$costs = array("coffee" => 1.25, "espresso" => 2.15);
$costs["tea"] = 1.50;
$costs["espresso"] = 1.75; # sale!

- Can turn an array into JSON using json_encode($arr)
*/

# -----------------------------------------------------
# foreach loops
# -----------------------------------------------------
/*
 * Convenient ways to loop over each elements with indices
 * Syntax:
 * foreach ($arr as $variablename) {
 *
 * }
 */
 // Example
 /*
foreach ($pups as $pup) {
  echo "Mowgli boops {$pup}\n"; # even himself
}
 */

?>
