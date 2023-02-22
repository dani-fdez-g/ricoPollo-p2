<?php
//la conexion con la base de datos y paginas addicionales
include_once 'config/dataBase.php';
    class Usuario{
        public static function addUser($email,$nombre,$apellido,$password){
            $con = dataBase::connect();
            $stmt = $con->prepare("INSERT INTO cliente (email,nombre,apellido,password) VALUES (?,?,?,?)");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss",$email,$nombre,$apellido,$password);
            //Execute statement
            $stmt->execute();
            $con->close();
        }

        public static function accessUser($email,$password){
            $con = dataBase::connect();
            $email = $_POST['email'];	
	        $password = $_POST['password'];	
            $stmt = $con->prepare("SELECT email password FROM cliente WHERE email=? AND password=? ");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss",$email,$password);
            //Execute statement
            $stmt->execute();
            $result = $stmt->get_result();

            if(mysqli_num_rows($result) == 1){
                return True;

            }else{
                return False;
            }



        }
        public static function miPerfil($email,$password){
            $con = dataBase::connect();
            $stmt = $con->prepare("SELECT email password FROM cliente WHERE email=? AND password=? ");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss",$email,$password);
            //Execute statement
            $stmt->execute();
            $result = $stmt->get_result();

            if(mysqli_num_rows($result) == 1){
                return True;

            }else{
                return False;
            }

        }
  


    }

?>  