<?php

interface ILoot{
    public function GiveLoot();
    public function GiveName();
    public function GiveValue(){
        return 100;
    }
}