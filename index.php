<?php
include_once('Parents/IncludeItems.php');
include_once('./Hotbar.php');
include_once('Blocks/Grass.php');

$hotbar = new Hotbar();

$grass = new Grass();

$tool = new Pickaxe();
$tool->initializeTool(Materials::WOOD);

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
<div class="overAll">
    <h1 id="oretype">______</h1>
  <?php

            $hotbar->addItem($axe);
            $hotbar->addItem($hand);
            $hotbar->addItem($shovel);
            $hotbar->addItem($pickaxe);
            $grass->destroyBlock($tool);

            foreach($hotbar->getHotbar() as $key => $value) {
                echo 'Key: '.$key.'; Value: '.$value;
                echo '<br>';
            }
  ?>
  </div>
  <div id="canvas-container">
    <canvas id="myCanvas" width="1880px" height="900px"></canvas>
  </div>
  <script src="UserInput.js"></script>

</body>

</html>