<?php //funciones
 class calculadoraPrecios{


    public static function calcularPrecioTotal($pedidos){
        $precioTotal = 0;
        foreach($pedidos as $pedido){
            $precioUnitario = $pedido->getProducto()->getPrecio($pedido->getCantidad());
            $precioTotal += $precioUnitario;
        }
        return $precioTotal;
   }
 }

?>