<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantization Table</title>
</head>
<body>
    <h1>Quantization Table <br> Where, <br> Quality =2 </h1>
    <br><br>
    <?php
    $quality=2;
    $n=8;
    echo "<table border='1'>";
    for ($i=0; $i < $n; $i++) { 
        echo "<tr>";
       for($j=0; $j < $n; $j++){
        $Q=array([$i],[$j]);
        $Q[$i][$j]=1+(1+$i+$j)*$quality;
        echo "<td>" . $Q[$i][$j] . "</td>";
       }
       echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>