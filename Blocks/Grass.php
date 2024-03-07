<?php
include_once("./Parents/Blocks.php");

class Grass extends Blocks {

    public function __construct() {
        parent::__construct();

        $this->durablity = 1;
        $this->tool = 'shovel';
        $this->defaultSpeed = 3;

    }

    /*

    shovel  = 1

    wood    = *1.5
    stone   = *1.3
    iron    = *1.0
    gold    = *0.9
    diamond = *0.5



    ...     = 3

    */

}