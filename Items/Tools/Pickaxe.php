<?php

include_once('./Parents/Tools.php');

class Pickaxe extends Tools {

    public function __construct(){
        
        parent::__construct();

        $this->setDisplayName("Pickaxe");
        $this->setItemname("pickaxe");

        $this->setRecipeTemplate([["MAT", "MAT", "MAT"], 
                                  ["", "stick", ""], 
                                  ["", "stick", ""]]);
    }

}


