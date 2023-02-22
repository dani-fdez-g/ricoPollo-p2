<?php
include_once 'modelo/conIngredientes.php';
class Hamburguesa extends ConIngredientes{

    public function __construct(){

    }

    /*
    public function __construct($nombre, $precio, $imagen, $descripcion, $ingredientes){
        parent::__construct($nombre, $precio, $imagen, $descripcion, $ingredientes);
     }

     */
    public function addIngrediente(){
        echo 'añadido';
    }

    public function quitIngrediente(){
        echo 'quitado';
    }


    public function getIngredientes()
    {
        return $this->ingredientes;
    }


    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;

    }
}