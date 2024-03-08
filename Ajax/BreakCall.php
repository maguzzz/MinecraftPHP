<?php

include_once('./Parents/Tools.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = json_decode(file_get_contents('php://input'), true);

    $block;

    $tool = new Pickaxe();
    $tool->initializeTool(Materials::IRON);

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
            break;
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