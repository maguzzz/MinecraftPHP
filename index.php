<?php
include_once('Parents/IncludeItems.php');


$pickaxe = new Pickaxe();
$pickaxe->initializeTool(Materials::WOOD);

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
    echo $pickaxe->getName();
  ?>
  </div>
  <div id="canvas-container">
    <canvas id="myCanvas" width="800" height="600"></canvas>
  </div>
  <script src="UserInput.js"></script>

</body>

</html>