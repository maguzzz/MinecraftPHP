<?php
include_once('Items.php');

interface Materials
{
    public const WOOD = 'WOOD';
    public const STONE = 'STONE';
    public const IRON = 'IRON';
    public const GOLD = 'GOLD';
    public const DIAMOND = 'DIAMOND';
}

abstract class Tools extends Items {

    protected $material;

    public function __construct(){

        parent::__construct();

        $this->setMaxCount(1);

    }

    public function setMaterial($material = Materials::WOOD) {
        $this->material = $material;
    }

    function getMaterial() {
        return $this->material;
    }

}