<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$target_url = "http://ltaattendance.byethost7.com/fetch_employee_API.php?i=2";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
