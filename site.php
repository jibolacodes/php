<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- Calculator -->
  <form action="site.php" method="get">
    Number 1: <input type="number" step="0.1" name="firstNum" /><br>
    Operator: <input type="text" name="operator" /><br>
    Number 1: <input type="number" name="secondNum" />
    <input type="submit">
  </form>
  <?php
  $num1 = $_GET["firstNum"];
  $num2 = $_GET["secondNum"];
  $op = $_GET["operator"];

  if ($op == "+") {
    echo $num1 + $num2;
  } elseif ($op == "-") {
    echo $num1 - $num2;
  } elseif ($op == "/") {
    echo $num1 / $num2;
  } elseif ($op == "*") {
    echo $num1 * $num2;
  } else {
    echo "Invalid Operator";
  }
  ?>
</body>

</html>