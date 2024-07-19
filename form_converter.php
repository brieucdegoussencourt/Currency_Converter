<?php
// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the request method is GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Sanitize and retrieve the 'amount' parameter from the GET request
    $amount = htmlspecialchars($_GET['amount']);
    
    // Check if the 'amount' parameter is a numeric value
    if (is_numeric($amount)) {
        // Multiply the amount by 2 and display the result
        $result = $amount * 2;
        echo "Result: " . $result;
    } else {
        // If the 'amount' parameter is not a valid number, display an error message
        echo "Please enter a valid number.";
    }
}
?>