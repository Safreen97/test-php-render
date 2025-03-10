<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Target URL (your InfinityFree API)
$api_url = "http://ltaattendance.wuaze.com/fetch_employee_API.php"; 

// Initialize cURL
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// Handle cookies to bypass InfinityFree's security check
curl_setopt($ch, CURLOPT_COOKIEJAR, __DIR__ . "/cookies.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, __DIR__ . "/cookies.txt");

// Execute the request
$response = curl_exec($ch);
curl_close($ch);

// Return the response
echo $response;
?>
