<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h1>Factorial Program</h1><br>
    <div class="main">
        <form action="factorial.php" method="POST">
            <label for="number">Enter a number:</label>
            <input type="text" name="number" id="number"><br>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['number'];
        function factorial($number){
            if($number == 0 || $number == 1){
                return 1;
            }
            else{
                return $number*factorial($number-1);
            }
        }
        echo "Factorial of $num = ".factorial($num);
    }
    ?>
</body>
</html>