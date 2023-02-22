<?php
 abstract class Productos{
     protected $nombre;
     protected $precio;
     protected $imagen;
     protected $descripcion;
     

     public function __construct(){
     }
     /*
     public function __construct($nombre, $precio, $imagen, $descripcion){
        $this-> nombre = $nombre;
        $this-> precio = $precio;
        $this-> imagen = $imagen;
        $this-> descripcion = $descripcion;

     }
*/



     /**
      * Get the value of nombre
      */ 
     public function getNombre()
     {
          return $this->nombre;
     }

     /**
      * Set the value of nombre
      *
      * @return  self
      */ 
     public function setNombre($nombre)
     {
          $this->nombre = $nombre;

     }

     /**
      * Get the value of precio
      */ 
     public function getPrecio()
     {
          return $this->precio;
     }

     /**
      * Set the value of precio
      *
      * @return  self
      */ 
     public function setPrecio($precio)
     {
          $this->precio = $precio;

     }


     /**
      * Get the value of imagen
      */ 
     public function getImagen()
     {
          return $this->imagen;
     }

     /**
      * Set the value of imagen
      *
      * @return  self
      */ 
     public function setImagen($imagen)
     {
          $this->imagen = $imagen;

     }

     /**
      * Get the value of descripcion
      */ 
     public function getDescripcion()
     {
          return $this->descripcion;
     }

     /**
      * Set the value of descripcion
      *
      * @return  self
      */ 
     public function setDescripcion($descripcion)
     {
          $this->descripcion = $descripcion;

     }
    }