<?php

class Unit{

    const ALLOWED_DIRECTION = ["right","left","top","bottom"];
    /**
    * @var integer
    */
    protected $pv;
    /**
    * @var array
    */
    protected $position = ["x" => 0, "y" => 0];
    /**
    * @var integer
    */
    protected $speed = 1;



    public function walk(string $direction) : Unit
    {
        if (in_array($direction, self::ALLOWED_DIRECTION)) {
            switch ($direction){
                case "right":
                    $this->position["x"] += $this->speed;
                case "left":
                    $this->position["x"] -= $this->speed;
                case "top":
                    $this->position["y"] += $this->speed;
                case "bottom":
                    $this->position["y"] -= $this->speed;
            }
        }
        return $this;
    }
    public function __toString(){
        return "Cette personne est en position X : " . $this->position["x"] . " et en Y : " . $this->position["y"] . " ! <br>";
    }
}