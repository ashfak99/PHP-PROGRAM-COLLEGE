<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZA PHP</title>
    <style>
        .head{
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="head">
    <?php
    echo "<h1>Chosen Pizza </h1>";
    $pizza=$_POST['pizzu'];
    foreach ($pizza as $p) {
       echo "<br>".$p . "<br>";
    }
    ?></div>
</body>
</html>