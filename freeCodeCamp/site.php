<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="GET">
       Name: <input type="text" name="name">
       <br>
       Age: <input type="text" name="age">
       <input type="submit">
    </form>
    <?php 
       echo $_GET['name'];
       echo '<br>';
       echo $_GET['age'];
    ?>
</body>
</html>