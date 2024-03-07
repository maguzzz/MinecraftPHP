<?php
include_once("./Parents/Blocks.php");

class Wood extends Blocks {

    public function __construct() {
        parent::__construct();

        $this->durablity = 2;
        $this->tool = 'axe';
        $this->defaultSpeed = 4;

    }

}