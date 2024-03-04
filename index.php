<?php

include_once('Blocks/Blocks.php');
include_once('Tools/Tools.php');

$hand = new Tools();
$test = new Tools();
$test1 = new Tools();
$test2 = new Tools();
$test3 = new Tools();

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
            echo ($hand->id.'<br>');
            echo ($test->id.'<br>');
            echo ($test1->id.'<br>');
            echo ($test2->id.'<br>');
            echo ($test3->id.'<br>');
        ?>
    </body>
</html>