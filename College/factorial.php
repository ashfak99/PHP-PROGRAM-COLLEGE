<?php
if(!isset($_POST['submit'])){
    echo "<form action='factorial.php' method='POST'>Factorial Program<br> Enter Number:  <input type='number' name='num'><br><button type='submit' name='submit'>SUbMIT</button></form>";
}
else{
    $num=$_POST['num'];
    function factorial($n){
        if ($n==0) {
            return 1;
        }
        else{
            return $n*factorial($n-1);
        }
    }
    echo "Factorial of $num = ",factorial($num);
}
?>