<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      function sayHi($name, $age) {
        echo "Hello $name, you are $age. <br>";
      }
      sayHi('Romeo', 27);
      sayHi('Lucy', 34);
      sayHi('Linda', 45);
      sayHi('Mason', 39);
    ?>
</body>
</html>