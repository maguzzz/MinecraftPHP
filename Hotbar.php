<?php

class Hotbar {
    
    private $hotBar;

    public function __construct($slotCount = 5) {
        $this->hotBar = array_fill(0, $slotCount, '');
    }

    public function getHotBar() {
        return $this->hotBar;
    }

    public function addItem(Items $item) {
        //if (Items::itemExists($item)) {
            if ($this->hasEmptySlot()) {
                foreach($this->getHotBar() as $key => $value) {
                    if ($value === '') {
                        $this->hotBar[$key] = $item->getId();
                        return;
                    }
                }
            }
        //}
    }

    public function addItemToSlot(Items $item, $slot) {
        $this->hotBar[$slot] = $item->getId();
    }


    public function removeItemBySlot($slot) {
        $this->hotBar[$slot] = '';
    }

    public function removeItem(Items $item) {
        foreach($this->getHotBar() as $key => $value) {
            if ($value == $item->getId()) {
                $this->hotBar[$key] = '';
            }
        }
    }


    public function isEmpty() {
        foreach ($this->getHotBar() as $key => $value) {
            if ($value !== '') {
                return false;
            }
        }
        return true;
    }

    public function isFull() {
        foreach ($this->getHotBar() as $key => $value) {
            if ($value === '') {
                return false;
            }
        }
        return true;
    }

    public function hasEmptySlot() {
        foreach ($this->getHotBar() as $key => $value) {
            if ($value === '') {
                return true;
            }
        }
        return false;
    }

    public function slotIsEmpty($slot) {
        return $this->hotBar[$slot] === ''; 
    }

}