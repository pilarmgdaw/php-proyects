<?php

include_once('Cuadrado.php');
$lado = $_GET['lado'];
$cuadrado = new Cuadrado($lado);
echo $cuadrado->area(); 