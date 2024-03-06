<?php
include_once('Items.php');
abstract class Tools extends Items {

    


    private $material;

    function __construct() {
        $this->setMaxCount(1);
    }

}