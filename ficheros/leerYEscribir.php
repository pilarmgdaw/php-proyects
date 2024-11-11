<?php

# Esta es una manera de leer un archivo de texto, ya que fgetc cada vez que se le llama te devuelve el siguiente carácter
# y feof es true cuando llega al final del archivo.

$file = fopen('fichero.txt', 'r');

while (!feof ($file)) {
    echo fgetc($file);
}

fclose($file);

# Otra manera es la siguiente

$file1 = file_get_contents('fichero.txt');

print_r($file1);

# O también lo podemos leer línea a línea.

$lineas = file('fichero.txt');

foreach ($lineas as $num_linea => $linea) {
    echo "Linea #" . $num_linea . ":" . $linea;
}

#Asi se modifican archivos con php

$file2 = fopen('fichero1.txt', 'w');

fwrite($file2, 'asdf');
fwrite($file2, 'asdfgo');

fclose($file2);




?>