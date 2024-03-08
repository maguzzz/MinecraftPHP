<?php
include_once('Parents/IncludeItems.php');
include_once('Parents/IncludeBlocks.php');
include_once('./Hotbar.php');

$hotbar = new Hotbar();

$tool = new Axe();
$tool->initializeTool(Materials::IRON);

echo $tool->getItemName();

$hotbar->addItem($tool);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css">
  <title>2D Movement with Buttons</title>
</head>

<body>
  <div id="customCursor"><img src="CSS/<?= $tool->getItemName() ?>.png" alt="Cursor"></div>
  <div class="overAll">
    <h1 id="oretype"> </h1>
    <h1 id="breakobject"> </h1>
  </div>
  
  <div id="inventoryContainer">
  </div>

  <div id="canvas-container">
    <canvas id="myCanvas" width="1880px" height="900px"></canvas>
  </div>
  <script src="UserInput.js"></script>
  <script src="https://code.jquery.com/jquery-latest.js"></script>

</body>

</html>