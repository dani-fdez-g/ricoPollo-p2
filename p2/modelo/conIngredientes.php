<?php 
include_once 'modelo/productos.php';
abstract class ConIngredientes extends Productos {
    protected $ingredientes;

    
    public function __construct(){}
    // public function __construct($nombre, $precio, $imagen, $descripcion, $ingredientes){
    //     $this-> nombre = $nombre;
    //     $this-> precio = $precio;
    //     $this-> imagen = $imagen;
    //     $this-> descripcion = $descripcion;
    //     $this-> ingredientes = $ingredientes;

    //  }
     

    abstract function addIngrediente();
    abstract function quitIngrediente();



}
?>