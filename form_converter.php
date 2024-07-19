<?php
// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['amount']) && isset($_GET['from']) && isset($_GET['to'])) {
    $amount = $_GET['amount'];
    $from = $_GET['from'];
    $to = $_GET['to'];

    // Replace with your actual API key and API endpoint
    $apiKey = '55990b959fmsh6182a2798a0d28bp19f5f2jsn9b66eea0e0a7';
    $apiUrl = "https://currency-converter5.p.rapidapi.com/currency/convert?format=json&from=$from&to=$to&amount=$amount&language=en";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'X-RapidAPI-Host: currency-converter5.p.rapidapi.com',
        'X-RapidAPI-Key: ' . $apiKey
    ]);
    $response = curl_exec($ch);
    if(curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    $data = json_decode($response, true);
    if (isset($data['rates'][$to]['rate_for_amount'])) {
        $result = $data['rates'][$to]['rate_for_amount'];
        echo $result;
    } else {
        echo 'Error retrieving conversion data';
    }
} else {
    echo 'Invalid parameters';
}
?>