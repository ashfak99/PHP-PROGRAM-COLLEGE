<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <div class="main">
        <?php
        $name=$_POST['uname'];
        $address=$_POST['Address'];
        $city=$_POST['city'];
        $gender=$_POST['Gender'];
        $lang=$_POST['lang'];

        echo "Name : $name <br>";
        echo "Address : $address <br>";
        echo "City : $city <br>";
        echo "Gender : $gender <br>";
        echo "Language : ";
        foreach ($lang as $lg) {
            echo " $lg ";
        }
        ?>
    </div>
</body>
</html>