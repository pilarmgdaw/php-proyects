<?php
class Circulo{
    private $radio;

    function __construct($radio)
    {
        $this->radio = $radio;
    }

    function area(){
        $area = 3.14 * $this->radio **2;
        return $area;
    }
}