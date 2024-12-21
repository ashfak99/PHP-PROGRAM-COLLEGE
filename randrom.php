<?php
// Start the session
session_start();

// Check if random number is already set in session
if (!isset($_SESSION['random_number'])) {
    // Generate and store random number in session
    $_SESSION['random_number'] = rand(1, 100);  
}

// Display the random number
echo "The random number is: " . $_SESSION['random_number'];
?>