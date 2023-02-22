<?php
include_once 'controller/productoControler.php';
include_once 'controller/usuarioControler.php';
include_once 'config/parametros.php'; 

if(!isset($_GET['controller'])){
    header("Location:$base_url"."?controller=producto" );
} else{
    $nombre_controller = $_GET['controller'].'Controller';
    if(class_exists($nombre_controller)){
        $controlador = new $nombre_controller;
        if(isset($_GET['action'])){
            $action = $_GET['action'];
        }else{
            $action = 'index';
        }
        $controlador -> $action();
    }else{
        header("Location:$base_url"."?controller=producto" );
    }
}
unset($_GET['controller']);
unset($_GET['action']);
?>

