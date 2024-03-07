<?php 

abstract class Items {

    private static $instances = [];

    private static $highestId;
    protected $id;

    protected $maxcount = 64;
    protected $count;

    protected $displayName;
    protected $itemName;

    protected $hasRecipe; //No Current 
    protected $recipe = [["", "", ""], 
                         ["", "", ""], 
                         ["", "", ""]];

    function __construct(){
        self::$instances[$this->id] = $this;

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

    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
    }

    public function getDisplayName() {
        return $this->displayName;
    }

    public function setItemName($itemName) {
        $this->itemName = $itemName;
    }

    public function getItemName() {
        return $this->itemName;
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
        return $this->hasRecipe() ? $this->recipe : null;
    }

    public static function getItemById($id) {
        foreach (self::$instances as $instance) {
            if ($instance->getId() === $id) {
                return $instance;
            }
        }
        return null;
    }

    public static function itemExists($item) {
        if (Items::getItemById($item->getId())) {
            return false;
        }
        return true;
    }
}