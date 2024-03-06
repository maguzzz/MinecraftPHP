<?php

include_once('./Parents/Tools.php');

class Hoe extends Tools {

    public function __construct(){
        
        parent::__construct();

        $this->setName("Axe");

        $this->setRecipeTemplate([["", "MAT", "MAT"], 
                                  ["", "stick", ""], 
                                  ["", "stick", ""]]);
    }

}


