<?php
include_once("./Parents/Blocks.php");

class Coal extends Blocks {

    public function __construct() {
        parent::__construct();

        $this->durablity = 3;
        $this->tool = 'pickaxe';
        $this->defaultSpeed = 10;

    }

}