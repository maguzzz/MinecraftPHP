<?php
include_once('Items.php');

interface Materials
{
    public const HAND = 'hand';
    public const WOOD = 'wood';
    public const STONE = 'stone';
    public const IRON = 'iron';
    public const GOLD = 'gold';
    public const DIAMOND = 'diamond';
}

abstract class Tools extends Items {

    protected $material;
    protected $recipeTemplate;

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

    public function setRecipeTemplate($recipeTemplate) {
        $this->recipeTemplate = $recipeTemplate;
    }

    public function getRecipeTemplate() {
        return $this->recipeTemplate;
    }

    public function recipeMaterialReplace($recipeTemplate) {
        $tempRecipe = [];

        foreach ($recipeTemplate as $row) {
            $tempRow = [];
            foreach ($row as $element) {
                if ($element === 'MAT') {
                    $tempRow[] = $this->getMaterial();
                } else {
                    $tempRow[] = $element;
                }
            }
            $tempRecipe[] = $tempRow;
        }

        $this->recipe = $tempRecipe;
    }

    public function initializeTool($material) {

        $this->setMaterial($material);

        if ($this->getMaterial() != Materials::HAND) {
            $this->setDisplayName(ucfirst(strtolower($this->getMaterial())).' '.$this->getDisplayName());
            $this->setItemName(strtolower($this->getMaterial().'_'.$this->getItemName()));
        }

        $this->recipeMaterialReplace($this->recipeTemplate);

    }

}