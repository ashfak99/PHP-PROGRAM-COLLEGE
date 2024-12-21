<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details PHP</title>
</head>
<body>
    <div class="main">
        <?php
        $carid=$_POST['car_id'];
        $carname=$_POST['car_name'];
        $make=$_POST['make'];
        $model=$_POST['model'];
        $price=$_POST['price'];

        echo "Car Id : $carid <br>";
        echo "Car Name : $carname <br>";
        echo "Make : $make<br>";
        echo "Model : $model<br>";
        echo "Price : $price<br>";
        ?>
    </div>
</body>
</html>