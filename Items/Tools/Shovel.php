<?php

include_once('./Parents/Tools.php');

class Shovel extends Tools {

    public function __construct(){
        
        parent::__construct();

        $this->setDisplayName("Shovel");
        $this->setItemname("shovel");

        $this->setRecipeTemplate([["", "MAT", ""], 
                                  ["", "stick", ""], 
                                  ["", "stick", ""]]);
    }

}


