<?php
$var1 = array(1,2,3);


if(is_array($var1)==true){
    echo "Es un array";
}else{
    echo "No es un array";
}

# Operador ternario para if

echo is_array($var1) ? "Es un array" : "No es un array";

$meses = array(
    "Enero" => 31,
    "Febrero" => 28,
    "Marzo" => 31,
    "Abril" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre" =>31
);
echo "<br>";

foreach($meses as $key => $value) {
    echo "El mes " . $key . " tiene " . $value . " días. <br>";
}