<?php

function arearectangulo(){
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $area = $base * $altura;
    return $area;
}
echo "El area de tu rectangulo es: " . arearectangulo();