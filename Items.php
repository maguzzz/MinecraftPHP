<?php 

abstract class Items{

    private static $highestId;
    protected $id;

    protected $count;

    protected $name;

    protected $maxcount = 64;

    function __construct($id){
        self::$highestId++;
        $this->id = self::$highestId;
    }

    protected function setMaxCount($count){
        $this->maxcount = $count;  
    }
    public function getId(){
        return $this->id;
    }

    public function getCount(){
        return $this->count;
    }

    public function decreaseCount($howmany){
        if($this->count > 0){
            $this->count -= $howmany;
        }
    }

    public function increaseCount($howmany){
        if($this->count < $this->maxcount){
            $this->count += $howmany;
        }
    }
}