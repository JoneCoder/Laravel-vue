<?php

class Pencilbox
{
    public $name = "Pencilbox Training";
    protected $city = "Dhaka";
    private $country = "Bangladesh";
    
    public function add($x, $y){
        $z = $x + $y;
        echo $z;
    }
    
    protected function sub($x, $y){
        $z = $x - $y;
        echo $z;
    }
    
    private function rem($x, $y){
        $z = $x % $y;
        echo $z;
    }
}