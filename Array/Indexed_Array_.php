<?php
$arr=array("Ashfak","Alam","Asrar");
var_dump($arr);
echo "<br><br>";

echo $arr[0]; //print 1st item of array
echo"<br><br>";

$arr[1]="Ali";  // change 2nd item of array "Alam to Ali"
var_dump($arr);
echo"<br><br>";

foreach ($arr as $a) {
    echo $a . "<br>";   //print array using foreach loop
}
?>