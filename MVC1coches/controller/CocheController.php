<?php

class CocheController
{
    private $miscoches;

    function __construct()
    {
        // Inicializa los coches llamando al método de la clase Coche
        $this->miscoches = Coche::obtenerCoches();
    }

    public function index()
    {
        // Asigno los coches a una variable que estará disponible para la vista
        //$rowset = $this->miscoches;
        $rowset=Coche::obtenerCoches();

        // Le paso los datos a la vista (index.php)
        require("view/index.php");
    }

    public function ver($id)
    {
        // Verifico si $id existe en el array $this->miscoches
        if (array_key_exists($id, $this->miscoches)) {
            // Si el coche existe, lo paso a la vista
            $row = $this->miscoches[$id];
            require("view/ver.php");
        } else {
            // Si no encuentra el coche, redirijo al listado
            $this->index();
        }
    }
}
