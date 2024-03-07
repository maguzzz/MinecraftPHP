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

    public function destroyBlock(Tools $tool) {
        if (str_ends_with($tool->getItemName(), $this->getTool())) {
            $this->calcBreakSpeed = $this->durablity * $this->speedByMaterial[$tool->getMaterial()];
        } else {
            $this->calcBreakSpeed = $this->defaultSpeed;
        }

        echo $this->calcBreakSpeed;
    }

}