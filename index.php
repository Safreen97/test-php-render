<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$api_url = "https://ltaattendance.wuaze.com/fetch_employee_API.php";

// Use cURL to fetch the API data
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
