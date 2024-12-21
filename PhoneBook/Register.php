<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiater | Ashfak</title>
    <style>
        .main{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .ip{
            margin-top: 20px;
        }
        #name{
            margin-left: 40px;
        }
        #phone{
            margin-left: 39px;
        }
        #email{
            margin-left: 40px;
        }
        #password{
            margin-left: 17px;
        }
        button{
            margin-top: 40px;
            margin-left: 100px;

        }
    </style>
</head>
<body>
    <div class="main">
    <form action="Register.php" method="POST">
        <div class="ip">
            Name : <input type="text" name="name" id="name"><br> 
        </div>
        <div class="ip">
            Phone : <input type="number" name="phone" minlength="10" id="phone" required><br>
        </div>
        <div class="ip">
            Email : <input type="email" name="email" id="email" required><br>
        </div>
        <div class="ip">
            Password : <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" name="submit" >SUBMIT</button><br>
        If You Already Register <a href="login.php">Login</a>Here
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$conn = new mysqli('localhost', 'root', '', 'phonebook');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (name, phone,email,password) VALUES ('$name','$phone','$email' ,'$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
</body>
</html>