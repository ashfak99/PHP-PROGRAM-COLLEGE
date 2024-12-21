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

$score = 0;
$total = 0;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $total++;
        if (isset($_POST['question' . $row["id"]]) && $_POST['question' . $row["id"]] == $row["correct_option"]) {
            $score++;
        }
    }
    echo 'Your score: ' . $score . ' out of ' . $total;
} else {
    echo "No questions available.";
}

$conn->close();
?>
