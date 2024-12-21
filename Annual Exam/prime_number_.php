<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <div class="main">
        <h3>Prime Number Program : </h3>
        <form action="prime_number_.php" method="post">
            <label for="number">Enter Number : </label>
            <input type="number" name="number" placeholder="Enter the Number"><br>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>

    <div class="php">
        <?php
        if (isset($_POST['submit'])) {
            $num=$_POST['number'];

            function prime_number($number){
                if ($number<=2) {
                    echo "$number is Not Prime";
                    return;
                }

                $count=0;
                for ($i=1; $i <= $number; $i++) { 
                    if ($number%$i==0) {
                        $count++;
                    }
                }
                if ($count==2) {
                    echo "$number is Not Prime";
                }
                else {
                    echo "$number is Prime";
                }
            }

            prime_number($num);
        }
        ?>
    </div>
</body>
</html>