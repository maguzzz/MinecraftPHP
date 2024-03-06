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

    private $material;

    function __construct($material) {

        $this->setMaxCount(1);

        $this->material = $material;

    }

    function getMaterial() {
        return $this->material;
    }

}