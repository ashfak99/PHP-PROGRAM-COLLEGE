<?php
if(!isset($_POST['submit']))
{
    echo " <form method='POST' action='colors.php'>
    Enter Age : <input type='number' name='age' >
    <button type='submit' name='submit'>SUBMIT</submit></form>";
}
else{
    $age = $_POST['age'];
   if ($age>18) {
    echo "<div style='background-color:red; width:100px; height:100px'></div>";
   }
   else if($age>15){
    echo "<div style='background-color:blue; width:100px; height:100px'></div>";
   }
   else if ($age>12) {
    echo "<div style='background-color:green; width:100px; height:100px'></div>";
   }
   else if($age>9){
    echo "<div style='background-color:yello; width:100px; height:100px'></div>";
   }
   else if($age>3){
    echo "<div style='background-color:orange; width:100px; height:100px'></div>";
   }
   else{
    echo "<div style='background-color:#FAAFBA; width:100px; height:100px'></div>";
   }
}
?>