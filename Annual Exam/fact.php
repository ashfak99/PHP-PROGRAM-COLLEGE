<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <div class="main">
        <form action="fact.php" method="post">

            <label for="number">Enter A Number : </label>
            <input type="number" name="number" id="number" placeholder="Enter A Number"><br>

            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>

    <div class="php">
       <?php
       if (isset($_POST['submit'])) {
        $number = $_POST['number'];

        function fact($num)
        {
            if ($num<=1) {
                return 1;
            }
            else{
               return $num*fact($num-1);
            }
        }
      echo "Factorial of $number :".fact($number) ."<br>";
       }
       ?>
    </div>
</body>
</html>