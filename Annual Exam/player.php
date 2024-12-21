<?php
$a=$_POST['player'];
echo "Choosen Player <br>";
echo "<ol>";
foreach ($a as $p ) {
    echo "<li>$p</li>";
}
echo "</ol>";
?>