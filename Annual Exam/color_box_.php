<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width: 100px;
            height: 100px;
            position: absolute;
            top: 20%;
            left: 20%;
        }
    </style>
</head>
<body>
<?php
$red=$_POST['red'];
$green=$_POST['green'];
$blue=$_POST['blue'];

echo "Red : $red<br>";
echo "Green : $green<br>";
echo "Blue : $blue<br>";

echo '<div style="background-color:rgb('.$red.','.$green.','.$blue.');"></div>';
?>
</body>
</html>