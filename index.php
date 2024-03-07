<?php
include_once('Parents/IncludeItems.php');
include_once('./Hotbar.php');

$hotbar = new Hotbar();

$axe = new Axe();
$axe->initializeTool(Materials::DIAMOND);

$shovel = new Shovel();
$shovel->initializeTool(Materials::WOOD);

$pickaxe = new Pickaxe();
$pickaxe->initializeTool(Materials::GOLD);

$hand = new Hand();
$hand->initializeTool(Materials::HAND);

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
    <h1>Hello</h1>
  <?php

            $hotbar->addItem($axe);
            $hotbar->addItem($hand);
            $hotbar->addItem($shovel);
            $hotbar->addItem($pickaxe);

            foreach($hotbar->getHotbar() as $key => $value) {
                echo 'Key: '.$key.'; Value: '.$value;
                echo '<br>';
            }
  ?>
  </div>
  <div id="canvas-container">
    <canvas id="myCanvas" width="800" height="600"></canvas>
  </div>
  <script src="UserInput.js"></script>

</body>

</html>