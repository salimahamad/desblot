<?php
// $response = '{
//     "id": 26385,
//     "status": "Done",
//     "service": "Basic IMEI Check",
//     "service_id": 0,
//     "created_at": "2024-05-10T11:18:17.606685+02:00",
//     "imei": "352130212294507",
//     "imei2": null,
//     "sn": null,
//     "phone_number": null,
//     "text": null,
//     "token_key": "d00***28c",
//     "token_request_price": "0.020",
//     "result": {
//         "imei": "352130212294507",
//         "brand_name": "Motorola",
//         "model": "New Model"
//     },
//     "is_custom_result": false,
//     "requested_at": "2024-05-10T11:18:17.606419+02:00",
//     "custom_format_response": null
// }';
// $data = json_decode($response, true);

// // Extract the result part
// $result = $data['result'];

// // Encode the result part back to JSON
// $resultJson = json_encode($result);

// // Print the result JSON
// echo $resultJson;
// die();
define('API_KEY','d0005165-eae4-458f-8737-e036192df28c');
$imeiNo = $_POST['imeiNo'];

// Initialize a cURL session
$curl = curl_init();

// Set the options for the cURL request
curl_setopt_array($curl, [
    CURLOPT_URL => "https://dash.imei.info/api/check/0/?API_KEY=".API_KEY."&imei=".$imeiNo,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "accept: application/json"
    ],
]);

// Execute the cURL session and store the response
$response = curl_exec($curl);

header('Content-type: application/json');
// Check for errors in the cURL request
if(curl_errno($curl)) {
    
} else {
    // Print the response if no errors occurred
    $data = json_decode($response, true);

    // Extract the result part
    $result = $data['result'];
    
    // Encode the result part back to JSON
    $resultJson = json_encode($result);
    
    // Print the result JSON
    echo $resultJson;
}

// Close the cURL session
curl_close($curl);