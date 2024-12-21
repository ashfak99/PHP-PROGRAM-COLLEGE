<?php
if(!isset($_POST['submit'])){
echo "<style>
.form{
display:flex;
align-item:center;
justify-content:center;
}
.gender{
margin-top: 20px;
}
</style>
<div class='form'><form action='first_program.php' method='POST'>
<div class='name'><label>Enter Your Name : </label>
<input type='text' name='name' id='name'><div><br>
<div class='address'><label>Enter Your Address: </div>
<textarea name='address' id='address'></textarea><div><br>
<label>Your city : </label>
<select name='city' id='city'>
<option value='New Delhi'>New Delhi</option>
<option value='Mumbai'>Mumbai</option>
</select><br>
<div class='gender'><label>Choose Your Gender : </label>
<input type='radio' value='male' name='gender' id='gender'>Male 
<input type='radio'value='male' name='gender' id='gender'>Female<div><br>
<div class='player'><label>Choose your favority player : </label>
<input type='checkbox' name='player[]' value='Rohit Sharma' id='player'>Rohit Sharma
<input type='checkbox' name='player[]' value='Gautam Gambhir' id='player'>Gautam Gambhir<div><br>
<button type='submit' name='submit'>SUBMIT</button>
</form></div>";
}
else{
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$player=$_POST['player'];
echo "Name : $name<br><br>";
echo "Address : $address<br><br>";
echo "City : $city <br><br>";
echo "Gender : $gender<br><br>";
echo "Fvrt Player : ";
foreach ($player as $p) {
    echo "<br>".$p . "<br>";
 }
}
?>