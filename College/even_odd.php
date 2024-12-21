<?php
if(!isset($_POST['submit']))
{
    echo "<div style='display:flex; justify-content:center; align-item:center;'><form method='POST' action='even_odd.php'><h1>EVEN or ODD</h1><br>Enter Number: <input type='number' name='num'><br><button style='margin-top: 10px; margin-left:40%;' type='submit' name='submit'>Submit</button></form></div>";
}
else{
    $num=$_POST['num'];
    if($num%2==0)
    {
        echo "<div style='display:flex; justify-content:center; align-item:center;'><h1>$num is Even Number</h1></div>";
    }
    else{
        echo "<div style='display:flex; justify-content:center; align-item:center;'><h1>$num is odd number</h1></div>";
    }
}
?>