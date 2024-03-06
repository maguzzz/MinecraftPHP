<?php

class Blocks {
    protected $name;

    protected $health;


    function __construct($health = 100;){
        $this->health = $health;
    }

    function getHealth(){
        return $this->$health;
    }
}