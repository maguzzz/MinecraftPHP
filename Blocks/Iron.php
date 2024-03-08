<?php
include_once("./Parents/Blocks.php");

class Iron extends Blocks {

    public function __construct() {
        parent::__construct();

        $this->durablity = 4;
        $this->tool = 'pickaxe';
        $this->defaultSpeed = 12;

    }

}