<?php

include_once('Blocks/Blocks.php');
include_once('Tools/Tools.php');
include_once('Tools/Pickaxe.php');

$woodenPickaxe1 = new Pickaxe();
$goldenPickaxe1 = new Pickaxe();
$diamondPickaxe1 = new Pickaxe();
$ironPickaxe1 = new Pickaxe();
$goldenPickaxe2 = new Pickaxe();

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
            echo($woodenPickaxe1->getID());
            echo($goldenPickaxe1->getID());
            echo($diamondPickaxe1->getID());
            echo($ironPickaxe1->getID());
            echo($goldenPickaxe2->getID());
        ?>
    </body>
</html>