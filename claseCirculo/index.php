<?php
include_once('Circulo.php');

$radio = $_GET['radio'];
$Circulo = new Circulo($radio);

echo $Circulo->area();