<?php 
/*
 Account Email: aileenmw@gmail.com
 Account ID: dd955791-c507-4299-b861-466d9a744138
 
Endpoint	                  Description
GET /search?q={q}	            Performing a search
GET /asset/{nasa_id}	        Retrieving a media asset’s manifest
GET /metadata/{nasa_id}	        Retrieving a media asset’s metadata location
GET /captions/{nasa_id}	        Retrieving a video asset’s captions location
 https://images-api.nasa.gov
*/

// api.php
$api_key = 'pub_46000de0b2c5d6a055cc9cde3f568b1bede9d'; // Replace with your actual API key
$api_url = 'https://newsdata.io/api/1/news?apikey=' . $api_key . '&q=breaking&language=en&category=entertainment';


// Use cURL to fetch the data
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

// Set content type header before any output
header('Content-Type: application/json');

// Output the JSON encoded data
echo json_encode($data);

// // Use cURL to fetch the data
// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, $api_url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_HTTPHEADER, [
//     'Authorization: Bearer ' . $api_key,
// ]);

// $response = curl_exec($ch);

// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }

// curl_close($ch);

// // Decode the JSON response
// $data = json_decode($response, true);

// // Return the data as JSON
// header('Content-Type: application/json');
// echo json_encode($data);
?>