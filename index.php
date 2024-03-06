<?php

include_once('Blocks/Blocks.php');
include_once('Tools/Tools.php');
include_once('Tools/Pickaxe.php');

$woodenPickaxe1 = new Pickaxe(12);
$goldenPickaxe1 = new Pickaxe(12);
$diamondPickaxe1 = new Pickaxe(12);
$ironPickaxe1 = new Pickaxe(12);
$goldenPickaxe2 = new Pickaxe(12);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
            echo($woodenPickaxe1->getMaxCount());
            echo($goldenPickaxe1->getMaxCount());
            echo($diamondPickaxe1->getMaxCount());
            echo($ironPickaxe1->getMaxCount());
            echo($goldenPickaxe2->getMaxCount());
        ?>
    </body>
</html>