<html>
<body>
<!-- form here !-->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Number 1: <input type="number" name="n1">
    Number 2:  <input type="number2" name="n2">
  <input type="submit">
</form>

<?php
# in page

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  if (empty($n2) || empty($n2)) {
    echo "Fields are empty";
  } else {
    echo $n2 + $n1;
  }
}
?>

</body>
</html>
