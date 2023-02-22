<?php
class DataBase{

    public static function connect($host='localhost', $user='dani', $pwd='dniiNox88-', $db='ricopollodb'){
        
        $con = new mysqli($host, $user, $pwd ,$db);
        //se revisa el estado de la conexion
        if($con === false){
            die("ERROR -> No se ha podido conectar . . ." . $con->connect_error);
        }

        return $con;
        
    }
}
?>