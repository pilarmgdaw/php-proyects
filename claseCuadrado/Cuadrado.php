<?php

class Cuadrado{
    private $lado;


    function __construct($lado)
    {
        $this->lado = $lado;
    }
    function area(){
        $area = $this->lado **2;
        return $area;
    }
}