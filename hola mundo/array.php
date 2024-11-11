<?php

$array1 = array("uno", "dos", "tres", "cuatro");

$arrayAsociativo = array(
    "nombre" => "Ivan",
    "apellido" => "Cuarteros",
    "edad" => 21
);

$i = 0;

print_r($arrayAsociativo);

foreach ($arrayAsociativo as $key => $value) {

    echo "El ". $key . " es ". $value;
    
}
foreach ($array1 as $key) {

    echo "el numero " . $key . "es" . $array1[$i];
    $i++;
}

$var1 = 3;

switch ($var1) {
    case 0:
        echo "la variable vale 0";
        break;
    case 1:
        echo "La variable vale 1";

    case 2: 
        echo "La variable vale 2";
    
    default:
            echo "No se sabe el valor de la variable";
        break;
}
?>