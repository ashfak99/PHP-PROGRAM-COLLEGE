<?php
$i;$j;
 echo "<table style=' border:solid black'>";
 for($i=1; $i<5; $i++)
 {
    echo "<tr style='border: solid black'>";
    for($j=1;$j<5;$j++)
    {
        echo "<td style='border:solid black'>$i,$j</td>";
    }
    echo "</tr>";
 }
 echo "</table>";
?>