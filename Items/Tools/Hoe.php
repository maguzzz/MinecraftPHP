<?php

include_once('./Parents/Tools.php');

class Hoe extends Tools {

    public function __construct(){
        
        parent::__construct();

        $this->setDisplayName("Hoe");
        $this->setItemname("hoe");

        $this->setRecipeTemplate([["", "MAT", "MAT"], 
                                  ["", "stick", ""], 
                                  ["", "stick", ""]]);
    }

}


