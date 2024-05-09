<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="site.php" method="get">
    <input type="text" name="firstColor">
    <br>
    <input type="text" name="secondColor">
    <br>
    <input type="text" name="person">
    <br>
    <input type="submit">
  </form>

  <?php
  $firstColor = $_GET["firstColor"];
  $secondColor = $_GET["secondColor"];
  $person = $_GET["person"];

  echo "
  <article>
    <p>Roses are $firstColor </p>
    <p>Violets are $secondColor </p>
    <p>I love $person </p>
  </article>
  "
  ?>

  <form action="site.php" method="post">
    Apples : <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges : <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears : <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
  </form>

  <?php
  $fruits = $_POST["fruits"];
  echo $fruits[2];
  ?>
</body>

</html>