<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="POST">
       Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
       Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
       Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
       <input type="submit">
    </form>
    <?php 
       $fruits = $_POST['fruits'];
       print_r($fruits);
    ?>
</body>
</html>