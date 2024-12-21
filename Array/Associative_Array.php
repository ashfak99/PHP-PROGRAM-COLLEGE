<?php
$arr=array("Name"=>"Ashfak","City"=>"New Delhi","DOB"=>2005);
var_dump($arr);
echo "<br><br>";
echo $arr["Name"];
echo "<br><br>";
$arr['City']="Mumbai";
echo "After changing city name <br><br>";
foreach($arr as $a=>$n)
{
    echo "$a : $n<br>";
}
?>