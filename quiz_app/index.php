<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<form action="result.php" method="post">';
    while($row = $result->fetch_assoc()) {
        echo '<p>' . $row["question"] . '</p>';
        for ($i = 1; $i <= 4; $i++) {
            echo '<input type="radio" name="question' . $row["id"] . '" value="' . $i . '">' . $row["option" . $i] . '<br>';
        }
    }
    echo '<input type="submit" value="Submit">';
    echo '</form>';
} else {
    echo "No questions available.";
}

$conn->close();
?>
