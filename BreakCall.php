<?php

include_once('Parents/IncludeItems.php');
include_once('Parents/IncludeBlocks.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$postData = json_decode(file_get_contents('php://input'), true);
    $postData = $_POST['data'];

    //$tool = new Pickaxe();
    //$tool->initializeTool(Materials::IRON);

    $block;

    switch ($postData) {
        case 'coal':
            $block = new Coal();
            break;
        case 'diamond':
            $block = new Diamond();
            break;
        case 'iron':
            $block = new Iron();
            break;
        case 'stone':
            $block = new Stone();
            break;
        case 'wood':
            $block = new Wood();
            break;
        default:
            $block = new Grass();
    }

    $block->destroyBlock($tool);

    $response = [];

    $response['time'] = $block->getCalcBreakSpeed();

    echo json_encode($response);
} else {
    // Handle other HTTP methods if necessary
    http_response_code(405); // Method Not Allowed
    echo "Only POST requests are allowed for this endpoint";
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["data"])) {
    // Retrieve the data from the AJAX request
    $inputData = $_POST["data"];
  
    // Process the data or perform any necessary actions
    // For example, you can echo the data back to the client
    echo "Received data: " . $inputData;
  } else {
    // Handle the case where the request method is not POST or data is not set
    echo "Invalid request";
  }