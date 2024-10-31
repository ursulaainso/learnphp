<?php

class Box {

    use Colorful;

    public $length;
    private $width;
    protected $height;
    
    public function __construct($length, $width, $height) {
        $this -> length = $length;
        $this -> height = $height;
        $this -> width = $width;
    }

    public function volume() {
        return $this-> length * $this -> width * $this -> height;
    }

    public function getWidth() {
        return $this -> width;
    }
}

class MetalBox extends Box {
    public $weightPerUnit;

    public function totalWeight() {
        return $this -> weightPerUnit * $this-> volume();
    }
}

trait Colorful {
    public $color;

    public function setColor($red, $green, $blue) {
    if($red<0 || $red>255) {
        $red = 0;
    }
    if($green<0 || $green>255) {
        $green = 0;
    }
    if($blue<0 || $blue>255) {
        $blue = 0;
    }

        $this-> color = '#' . bin2hex($red) . bin2hex($green) . bin2hex($blue);
    }
}

$box1 = new Box(4, 5, 6);

var_dump($box1);
var_dump($box1 -> volume());   //nooleke tähendab, et tegu on objekti propsidega


$box2 = new Box(5, 6, 7);

var_dump($box2);
var_dump($box2 -> volume()); 

$metalBox1 = new MetalBox(1, 2, 3);
$metalBox1 -> weightPerUnit;