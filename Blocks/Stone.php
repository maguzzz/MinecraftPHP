<?php
include_once("./Parents/Blocks.php");

class Stone extends Blocks {

    public function __construct() {
        parent::__construct();

        $this->durablity = 2;
        $this->tool = 'pickaxe';
        $this->defaultSpeed = 8;

    }

}