<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <h1>Prime Number</h1>
    <div class="main">
        <form action="prime_number.php" method="post">
            <label for="number">Enter a number:</label>
            <input type="number" name="number" id="number"><br>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['number'];
        function prime_number($number){
            if ($number < 2) {
                echo "$number is not a prime Number";
                return;
            }
            $count=0;
            for ($i=1; $i <= $number; $i++) { 
                if ($number % $i==0) {
                    $count++;
                }
            }
            if ($count == 2) {
                echo " $number is not prime Number";
            }
            else{
                echo " $number is prime Number";
            }
        } 
        prime_number($num);
    }
    ?>
</body>
</html>