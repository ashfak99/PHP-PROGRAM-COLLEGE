<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chooses Pizza</title>
</head>
<body>
    <div class="main">
        <?php
        $pizza=$_POST['pizza'];
        echo "Chooses Pizza: <br>";
        echo "<ol>";
        foreach($pizza as $p){
            echo "<br> <li> $p </li>";
        }
        echo "</ol>";
        ?>
    </div>
</body>
</html>