<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the data from the POST request
    $postData = json_decode(file_get_contents('php://input'), true);

    // Echo back the received data
    echo json_encode($postData);
} else {
    // Handle other HTTP methods if necessary
    http_response_code(405); // Method Not Allowed
    echo "Only POST requests are allowed for this endpoint";
}