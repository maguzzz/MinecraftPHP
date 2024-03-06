<?php

include_once('./Parents/Tools.php');

class Pickaxe extends Tools {

    public function __construct(){
        
        parent::__construct();

        $this->setName("Pickaxe");

        $this->setRecipeTemplate([["MAT", "MAT", "MAT"], 
                                  ["", "stick", ""], 
                                  ["", "stick", ""]]);
    }

}


