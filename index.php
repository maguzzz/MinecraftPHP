<?php
include_once('Parents/IncludeItems.php');


$pickaxe = new Pickaxe();
$pickaxe->initializeTool(Materials::WOOD);
$hand = new Hand();
$hand->initializeTool(Materials::HAND);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="UserInput.js">
    </script>
    <title>Big Block</title>
</head>
    <body>
        <?php
            echo '<pre>';
            var_dump($hand->getName());
            echo '</pre>';
        ?>
    </body>
</html>