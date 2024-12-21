<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $email = $_POST['email'];
    $password=$_POST['password'];

  $conn= new mysqli('localhost','root','','phonebook');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
   $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        echo "Verify ";

        // Verify password
        if (password_verify($password, $user['Password'])) {
            echo "Login successful!";
            // Start a session and set user session variables
            session_start();
            $_SESSION['email'] = $email;
            // Redirect to a protected page
            header("location:welcome.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }
    $conn->close();
}
?>