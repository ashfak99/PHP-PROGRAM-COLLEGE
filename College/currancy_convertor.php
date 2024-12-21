<?php
if(!isset($_POST['submit']))
{
    echo "<div style='display:flex; justify-content:center; align-item:center;'><form action='currancy_convertor.php' method='POST'><h1>Currancy Convertor<br>Dollar to Indian Rupees</h1><br> Dollar : <input type='number' name='dlr'> <br> <button style='margin-top: 10px; margin-left:40%;' type='submit' name='submit'>Submit</button></form></div>";
}
else{
    $dlr = $_POST['dlr'];
    $ir=$dlr*83.81;
    echo"<div style='display:flex; justify-content:center; align-item:center;'><h1>$dlr dollar = $ir ruppes</h1></div>";
}
?>