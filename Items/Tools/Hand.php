<?php

include_once('./Parents/Tools.php');

class Hand extends Tools {

    public function __construct(){
        
        parent::__construct();

        $this->setDisplayName("Hand");
        $this->setItemname("hand");

        $this->setRecipeTemplate([["", "", ""], 
                                  ["", "", ""], 
                                  ["", "", ""]]);
    }

}


