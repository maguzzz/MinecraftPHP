<?php
include_once('Parents/IncludeItems.php');


$woodenPickaxe1 = new Pickaxe(Materials::Wood);
$goldenPickaxe1 = new Pickaxe(Materials::Wood);
$diamondPickaxe1 = new Pickaxe(Materials::Wood);
$ironPickaxe1 = new Pickaxe(Materials::Wood);
$goldenPickaxe2 = new Pickaxe(Materials::Wood);

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