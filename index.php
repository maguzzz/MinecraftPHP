<?php
include_once('Parents/IncludeItems.php');


$pickaxe = new Pickaxe();
$pickaxe->setMaterial();

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
            echo ($pickaxe->getMaterial());
        ?>
    </body>
</html>