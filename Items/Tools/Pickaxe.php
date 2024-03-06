<?php

include_once('./Parents/Tools.php');

class Pickaxe extends Tools {

    public function __construct() {
        parent::__construct($this->material);
    }

    public function getMaterial() {
        //return strtolower($this->material).'_pickaxe';
        return $this->material;
    }

}


