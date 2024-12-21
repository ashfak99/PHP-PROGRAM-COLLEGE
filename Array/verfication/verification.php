<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
</head>
<body>
    <div class="main">
        <?php
        $name=$_POST['name'];
        $age=$_POST['age'];
        $marital=$_POST['marital'];
        $city=$_POST['city'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];

        if($age>=18)
        {
            include '../verfication/welcome.php';
            echo "<br><br>Your Details <br><br>";
            echo "Name : $name<br>";
            echo "Age : $age<br>";
            echo "Marital : $marital<br>";
            echo "City : $city<br>";
            echo "Email : $email<br>";
            echo "Phone : $phone<br>";
        }
        else{
            echo "You are not eligible for this program";
        }
        ?>
    </div>
</body>
</html>