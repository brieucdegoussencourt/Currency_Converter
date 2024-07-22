<?php

// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if 'amount', 'from', and 'to' parameters are set in the GET request
if (isset($_GET['amount']) && isset($_GET['from']) && isset($_GET['to'])) {
    // Retrieve the parameters from the GET request
    $amount = $_GET['amount'];
    $from = $_GET['from'];
    $to = $_GET['to'];

    // Replace with your actual API key and API endpoint
    $apiKey = '55990b959fmsh6182a2798a0d28bp19f5f2jsn9b66eea0e0a7';
    $apiUrl = "https://currency-converter5.p.rapidapi.com/currency/convert?format=json&from=$from&to=$to&amount=$amount&language=en";

    // Initialize cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl); // Set the API URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Return the response as a string
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'X-RapidAPI-Host: currency-converter5.p.rapidapi.com',
        'X-RapidAPI-Key: ' . $apiKey
    ]); // Set the HTTP headers for the API request

    // Execute the cURL request and store the response
    $response = curl_exec($ch);

    // Check if there is any cURL error
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch); // Output the error message
    } else {
        // Decode the JSON response into an associative array
        $data = json_decode($response, true);

        // Check if the desired conversion rate is available in the response
        if (isset($data['rates'][$to]['rate_for_amount'])) {
            // Retrieve the conversion result
            $result = $data['rates'][$to]['rate_for_amount'];
            // Output the conversion result
            echo $result . ' ' . $to;
        } else {
            // Output an error message if the conversion data is not found
            echo 'Error retrieving conversion data';
        }
    }

    // Close the cURL session
    curl_close($ch);
} else {
    // Output an error message if the required parameters are not provided
    echo 'Invalid parameters';
}
?>