<?php

include_once('Blocks/Blocks.php');

class Tools {

    private static $highestID;

    public $id;

    function __construct() {
        self::$highestID++;
        $this->id = self::$highestID;
    }

}