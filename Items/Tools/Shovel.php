<?php

include_once('./Parents/Tools.php');

class Shovel extends Tools {

    public function __construct(){
        
        parent::__construct();

        $this->setName("Shovel");

        $this->setRecipeTemplate([["", "MAT", ""], 
                                  ["", "stick", ""], 
                                  ["", "stick", ""]]);
    }

}


