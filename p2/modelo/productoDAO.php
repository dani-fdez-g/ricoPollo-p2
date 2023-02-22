<?php 
//la conexion con la base de datos y paginas addicionales
include_once 'config/dataBase.php';
include_once 'utils/cargarProductos.php';
class productoDAO{
// funcion para mostrar todos los productos filtrados por tipo o categoria
    public static function getAllByTypes($categoria){
        $con = DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM producto WHERE categoria=?");
        //preparamos la consulta y los datos que se van a filtrar
        $stmt->bind_param("i", $categoria);

        //ejecutar consulta
        $stmt->execute();
        $result=$stmt->get_result();

        $listaProductos = [];
        while($ricopolloDB = $result->fetch_object("Cubo")){
            $listaProductos[] = $ricopolloDB;
        }
        return $listaProductos;
        $con->close();
        
    }
    public static function getAll(){
        $Llista1 = productDao::getAllbyType("hamburguesa");
        $Llista2 = productDao::getAllbyType("ensalada");
        $Llista3 = productDao::getAllbyType("cubo");
        $Llista4 = productDao::getAllbyType("tira");
        $Llista5 = productDao::getAllbyType("complemento");
        $Llista6 = productDao::getAllbyType("bebida");

        $LlistaAll = array_merge($Llista1, $Llista2,$Llista3,$Llista4,$Llista5, $Llista6);
        return $LlistalAll;

    }
    public static function addPedido($email_cliente,$precio){
        $con = dataBase::connect();
        $stmt = $con->prepare("INSERT INTO pedido (email_cliente,precio) VALUES (?,?)");
        //Bind variables to the prepared statement as parameters
        $stmt->bind_param("sd",$email_cliente,$precio);

        //Execute statement
        $stmt->execute();
        $codigo_pedido = mysqli_insert_id($con);
        $con->close();
        return $codigo_pedido;
    }
    public static function addPedidoProducto($codigo_producto,$codigo_pedido){
        $con = dataBase::connect();
        $stmt = $con->prepare("INSERT INTO pedido_producto (codigo_producto,codigo_pedido) VALUES (?,?)");
        //Bind variables to the prepared statement as parameters
        $stmt->bind_param("ii",$codigo_producto,$codigo_pedido);
        //Execute statement
        $stmt->execute();
        $con->close();
    }

    public static function addProducto($nombre,$descripcion,$imagen,$precio,$categoria){
        $con = dataBase::connect();
        $stmt = $con->prepare("INSERT INTO producto (nombre,descripcion,imagen,precio,categoria) VALUES (?,?,?,?,?)");
        //Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssis",$nombre,$descripcion,$imagen,$precio,$categoria);
        //Execute statement
        $stmt->execute();
        $con->close();

    }
    public static function updateProductoById($codigo_producto,$nombre,$descripcion,$imagen,$precio,$categoria){
        $con = dataBase::connect();
        $stmt = $con->prepare("UPDATE producto SET nombre=?, descripcion=?, imagen=?, precio=?, categoria=? WHERE codigo_producto=?");
        //Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssisi",$nombre,$descripcion,$imagen,$precio,$categoria,$codigo_producto);
        //Execute statement
        $stmt->execute();
        $con->close();

    }
    public static function deleteProductoByName($nombre,$categoria){
        $con = dataBase::connect();
        $stmt = $con->prepare("DELETE FROM producto WHERE nombre=? and categoria=?");
        //Bind variables to the prepared statement as parameters
        $stmt->bind_param("ss",$nombre,$categoria);
        //Execute statement
        $stmt->execute();
        $con->close();

    }

}