<?php
class Coche
{
    //Variables o atributos
    private $id;
    private $marca;
    private $modelo;
    private $color;
    private $propietario;

    private static $coches;
    function __construct($id = -1, $miMarca, $miModelo, $miColor, $miPropietario)
    {
        $this->id=$id;
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->propietario = $miPropietario;
        self::$coches[] = array();
    }
    //Funciones o métodos
    function setId($miId){
        $this->id=$miId;
    } 
    function getId(){
        return $this->id;
    }
    function setMarca($miMarca)
    {
        $this->marca = $miMarca;
    }
    function getMarca()
    {
        return $this->marca;
    }
    function setModelo($miModelo)
    {
        $this->modelo = $miModelo;
    }
    function getModelo()
    {
        return $this->modelo;
    }
    function setColor($miColor)
    {
        $this->color = $miColor;
    }
    function getColor()
    {
        return $this->color;
    }
    function setPropietario($miPropietario)
    {
        $this->propietario = $miPropietario;
    }
    function getPropietario()
    {
        return $this->propietario;
    }

    
    






    public static function obtenerCoches(){

        $conexion = new PDO("mysql:host=localhost;dbname=concesionario", "root", "");

        // Establecer el modo de error de PDO a excepción
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $rows=$conexion->query('SELECT id, marca, modelo, color, propietario FROM coches');
        $acoches= array();

        foreach ($rows as $row2) {
            $coche = new Coche($row2["id"], $row2["marca"], $row2["modelo"], $row2["color"], $row2["propietario"]);

            $acoches[] = $coche;
        }

        return $acoches;

    }

}


   
    
