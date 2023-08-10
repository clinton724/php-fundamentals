<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post">
        <input type="text" name="student"> <br>
        <input type="submit">
    </form>
    <?php 
       $grades = [
         "Pam" => "A+",
         "Jim" => "B-",
         "John" => "C+",
         "David" => "C+",
         "Linda" => "A-"
       ];
       echo $grades[$_POST['student']];
    ?>
</body>
</html>