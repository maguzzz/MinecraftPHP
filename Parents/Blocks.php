<?php
include_once('Tools.php');

abstract class Blocks implements Materials {

    protected $durablity;
    protected $tool;
    protected $speedByMaterial;
    protected $defaultSpeed;
    protected $calcBreakSpeed;

    public function __construct() {

        $this->speedByMaterial = [Materials::WOOD => 1.5, Materials::STONE => 1.3, Materials::IRON => 1, Materials::GOLD => 0.9, Materials::DIAMOND => 0.5, Materials::HAND => $this->defaultSpeed];

    }

    public function destroyBlock(Tools $tool) {
        if (str_ends_with($tool->getItemName(), '_'.$this->getTool())) {
            $this->calcBreakSpeed = $this->durablity * $this->speedByMaterial[$tool->getMaterial()];
        } else {
            $this->calcBreakSpeed = $this->defaultSpeed;
        }

        echo $this->calcBreakSpeed;
    }


    public function setDurability($durablity) {
        $this->durablity = $durablity;
    }

    public function getDurablity() {
        return $this->durablity;
    }


    public function setTool($tool) {
        $this->tool = $tool;
    }

    public function getTool() {
        return $this->tool;
    }


    public function setSpeedByMaterial($speedByMaterial) {
        $this->speedByMaterial = $speedByMaterial;
    }

    public function getSpeedByMaterial() {
        return $this->speedByMaterial;
    }


    public function setDefaultSpeed($defaultSpeed) {
        $this->defaultSpeed = $defaultSpeed;
    }

    public function getDefaultSpeed() {
        return $this->defaultSpeed;
    }


    public function setCalcBreakSpeed($breakSpeed) {
        $this->calcBreakSpeed = $breakSpeed;
    }

    public function getCalcBreakSpeed() {
        return $this->calcBreakSpeed;
    }
    
}