<?php
echo $_POST['nombre'];
echo "<pre>";
echo "GET: ";
print_r($_GET);
echo "<br>POST";
echo  "<br>";


print_r($_FILES);
//move_uploaded_file($_FILES["fichero"]["tmp_name"], "/ficheros/" . $_FILES["fichero"]["imagenes"]);



?>