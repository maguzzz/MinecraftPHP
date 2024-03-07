<?php
include_once("./Parents/Blocks.php");

class Diamond extends Blocks {

    public function __construct() {
        parent::__construct();

        $this->durablity = 5;
        $this->tool = 'pickaxe';
        $this->defaultSpeed = 15;

    }

}