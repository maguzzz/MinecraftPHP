<?php

include_once('./Parents/Tools.php');

class Pickaxe extends Tools {

    function __construct(){
        parent::__construct();
        var_dump($this->material);
        $this->setName(ucfirst(strtolower($this->material)).' Pickaxe');
    }

}


