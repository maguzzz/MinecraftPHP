<?php
include_once('Items.php');

enum Materials 
{
    case Wood;
    case Stone;
    case Iron;
    case Gold;
    case Diamond;
}

abstract class Tools extends Items {

    private $material;

    function __construct(Materials $materials) {

        $this->setMaxCount(1);

               

    }

}