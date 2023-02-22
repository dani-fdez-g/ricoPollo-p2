<?php 
class productoController{
    public static function index(){
        include_once 'utils/cargarProductos.php';
        include_once 'assets/includes/cabecera.php';
        require_once 'views/principal.php';
        include_once 'assets/includes/footer.php';

    }
    public static function carta(){
        // se cargan los productos y pedidos
        include 'utils/cargarProductos.php'; 
        include 'modelo/pedidos.php';
        include_once 'assets/includes/cabecera.php';
        require_once 'views/carta.php';
        //si no existe la sesion se crea, si existe se añade el producot seleccionado
        if(isset($_SESSION['sel'])){
          
            if(isset($_POST['producto-hamburguesa'])){
                // se añade el producto a la clase pedidos
                $productoSel = new Pedido ();
                $productoSel->setProducto($hamburguesas[(int)$_POST['producto-hamburguesa']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-hamburguesa']);
                
            }
            elseif(isset($_POST['producto-ensalada'])){
                // se añade el producto a la clase pedidos
                $productoSel = new Pedido ();
                $productoSel->setProducto(($ensaladas[$_POST['producto-ensalada']]));
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-ensalada']);
            }
            elseif(isset($_POST['producto-cubo'])){
                // se añade el producto a la clase pedidos
                $productoSel = new Pedido ();
                $productoSel->setProducto($cubos[$_POST['producto-cubo']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-cubo']);
            }
            elseif(isset($_POST['producto-tira'])){
                // se añade el producto a la clase pedidos
                $productoSel = new Pedido ();
                $productoSel->setProducto($tiras[$_POST['producto-tira']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-tira']);
            }
            elseif(isset($_POST['producto-complemento'])){
                // se añade el producto a la clase pedidos
                $productoSel = new Pedido ();
                $productoSel->setProducto($complementos[$_POST['producto-complemento']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-complemento']);
            }
            elseif(isset($_POST['producto-bebida'])){
                // se añade el producto a la clase pedidos
                $productoSel = new Pedido ();
                $productoSel->setProducto($bebidas[$_POST['producto-bebida']]);
                array_push($_SESSION['sel'], $productoSel );
                // unset($_POST['producto-bebida']);
            }

        }
        else{
            // se crea la sesion
            $_SESSION['sel'] = array();
        }
        include_once 'assets/includes/footer.php';

    }
    public static function compra(){
        // se cargan los productos
        include_once 'modelo/calculadora.php';
        include_once 'utils/cargarProductos.php';
        include_once 'modelo/pedidos.php';
        include_once 'assets/includes/cabecera.php';
           //botones para añadir y eliminar cantidades
           if(isset($_POST['del'])){
            $pedidoSel = $_SESSION["sel"][$_POST['pos']];
            if($pedidoSel->getCantidad() == 1){
                unset($_SESSION["sel"][$_POST['pos']]);
                //re-index
                $_SESSION["sel"] = array_values($_SESSION["sel"]);
            }else{
                $pedidoSel->setCantidad($pedidoSel->getCantidad() - 1);
            }
        }else if (isset($_POST['add'])){
            $pedidoSel = $_SESSION['sel'][$_POST['pos']];
            $pedidoSel -> setCantidad($pedidoSel->getCantidad() + 1);
        }
        //creo la cookie
        $precioFinal = calculadoraPrecios::calcularPrecioTotal($_SESSION['sel']);
        setcookie("ultimoPrecio", $precioFinal, time()+10000);
        include_once 'views/compra.php';
        include_once 'assets/includes/footer.php';
        
    
    }
    public static function privacidad(){
        include_once 'assets/includes/cabecera.php';
        require_once 'views/privacidad.php';
        include_once 'assets/includes/footer.php';
    }
    public static function aviso(){
        include_once 'assets/includes/cabecera.php';
        require_once 'views/aviso-legal.php';
        include_once 'assets/includes/footer.php';
    }
    public static function cookies(){
        include_once 'assets/includes/cabecera.php';
        require_once 'views/cookies.php';
        include_once 'assets/includes/footer.php';
    }
    public static function contacto(){
        include_once 'assets/includes/cabecera.php';
        require_once 'views/contacto.php';
        include_once 'assets/includes/footer.php';
    }
    public static function sobreNosotros(){
        include_once 'assets/includes/cabecera.php';
        require_once 'views/sobre-nosotros.php';
        include_once 'assets/includes/footer.php';
    }
    public static function confirmar(){

        include_once 'modelo/pedidos.php';
        include_once 'assets/includes/cabecera.php';
        include_once 'modelo/calculadora.php';
        include_once 'utils/cargarProductos.php';
        $precio = calculadoraPrecios::calcularPrecioTotal($_SESSION['sel']);
        $codigo_pedido = productoDAO::addPedido($_SESSION['user']['email'],$precio);
        foreach($_SESSION['sel'] as $producto){
            //peta porque el $producto->getProducto()->getNombre() deberia de ser un int => ERROR: CONSTRAINT `pedido_producto_ibfk_3` FOREIGN KEY (`codigo_comanda_pedido`) REFERENCES `factura` (`codigo_factura`)
            productoDAO::addPedidoProducto($producto->getProducto()->getNombre(),$codigo_pedido);
        }

        include_once 'views/compra.php';
        include_once 'assets/includes/footer.php';
    }
    public static function admin(){
        include_once 'assets/includes/cabecera.php';
        require_once 'views/panelAdmin.php';
        include_once 'assets/includes/footer.php';
    }
    public static function adminAñadirProducto(){
        include 'utils/cargarProductos.php'; 
        include 'modelo/pedidos.php';
        include_once 'assets/includes/cabecera.php';
        $ruta="assets/img/productos-img/";
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $imagen=$ruta.$_POST['imagen'];
        $precio=$_POST['precio'];
        $categoria=$_POST['categoria'];
        productoDAO::addProducto($nombre,$descripcion,$imagen,$precio,$categoria);
        require_once 'views/panelAdmin.php';
        include_once 'assets/includes/footer.php';
    }
    public static function adminEliminarProducto(){
        include 'utils/cargarProductos.php'; 
        include 'modelo/pedidos.php';
        include_once 'assets/includes/cabecera.php';
        $nombre=$_POST['nombre'];
        $categoria=$_POST['categoria'];
        productoDAO::deleteProductoByName($nombre,$categoria);
        require_once 'views/panelAdmin.php';
        include_once 'assets/includes/footer.php';
    }
    public static function adminModificarProducto(){
        include 'utils/cargarProductos.php'; 
        include 'modelo/pedidos.php';
        include_once 'assets/includes/cabecera.php';
        $ruta="assets/img/productos-img/";
        $codigo_producto=$_POST['codigo_producto'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $imagen=$ruta.$_POST['imagen'];
        $precio=$_POST['precio'];
        $categoria=$_POST['categoria'];
        productoDAO::updateProductoById($codigo_producto,$nombre,$descripcion,$imagen,$precio,$categoria);
        require_once 'views/panelAdmin.php';
        include_once 'assets/includes/footer.php';
    }
}