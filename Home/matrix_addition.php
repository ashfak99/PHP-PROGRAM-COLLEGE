<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Addition</title>
</head>
<body>
    <div class="main">
        <form action="matrix_addition.php" method="POST">
            <label for="row">Number of rows : </label>
            <input type="number" id="row" name="row">
            <textarea name="text" id="text"></textarea>
            <br>
            <label for="col">Number of columns : </label>
            <input type="number" name="col" id="col">
            <br>
            <button type="submit" name="next" >NEXT</button>
        </form>
    </div>
    <?php
    if (isset($_POST['next'])) {
        $row = $_POST['row'];
        $col = $_POST['col'];
        $r;
        $c;
            for($i=0;$i<$row;$i++)
            {
                for($j=0;$j<$col;$j++)
                {
                   $element=array($r=array(),$c=array());
                   echo '<form method="POST" action="matrix_addition.php"><input type="text" name="element"><br><button type="submit" name"=submit">SUBMIT</button></form>';
                  if (isset($_POST['submit'])) {
                    $element[$i][$j]=$_POST['element'];
                  }
                  echo "<br>";
                }
            }
       
    }
    ?>
</body>
</html>