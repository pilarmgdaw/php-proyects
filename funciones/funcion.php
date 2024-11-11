<?php

function holaMundo(){
    $hola = "hola mundo";
    return $hola . "<br>";
}

function holaMundo2($var2 = ''){
    echo $var2 . "<br>";
    echo "hola mundo <br>";
}

echo holaMundo();

echo holaMundo2("Iván Cuarteros");

#Asi se modifican archivos con php

# En esta función $a no le afecta lo que pasa en la función por eso sigue valiendo 10

function sumar($x){
    $x++;
    echo $x . "<br>";
}

$a = 10;

sumar($a);

echo $a . "<br>";

function sumar1(&$x){
    $x++;
    echo $x . "<br>";
}

$b = 10;

sumar1($b);

echo $b ."<br>";

function sumar2($valor){
    $valor++;
    return($valor);
}

$retorno = sumar2(10);

echo $retorno . "<br>";


function sumar3($valor2){
    $valor2++;

    $arr = array(
        '1' => 'uno',
        '2' => 'dos',
        '3' => 'tres',
        '4' => 'cuatro'
    );

    return $arr;
}

$retorno = sumar3(10);

print_r($retorno);




?>