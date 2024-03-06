<?php 

abstract class Items {

    private static $highestId;
    protected $id;

    protected $maxcount = 64;
    protected $count;

    protected $name;

    protected $hasRecipe; //No Current 
    protected $recipe = [["", "", ""], 
                         ["", "", ""], 
                         ["", "", ""]];

    function __construct(){
        self::$highestId++;
        $this->id = self::$highestId;
    }

    public function getId(){
        return $this->id;
    }

    protected function setMaxCount($count){
        $this->maxcount = $count;  
    }

    public function getMaxCount() {
        return $this->maxcount;
    }

    public function getCount(){
        return $this->count;
    }

    public function increaseCount($howmany){
        if($this->count < $this->maxcount){
            $this->count += $howmany;
        }
    }

    public function decreaseCount($howmany){
        if($this->count > 0){
            $this->count -= $howmany;
        }
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function hasRecipe() {
        foreach ($this->recipe as $row) {
            foreach ($row as $value) {
                if ($value != "") {
                    return true;
                }
            }
        }
        return false;
    }

    public function getRecipe() {
        return $this->recipe;
    }
}