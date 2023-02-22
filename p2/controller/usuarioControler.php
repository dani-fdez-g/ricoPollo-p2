<?php 
class usuarioController{
    // public static function acceder(){
    //     include_once 'assets/includes/cabecera.php';
    //     require_once 'modelo/usuarioDAO.php';
        
    //     if(isset($_POST['email'], $_POST['password'])){
    //         $acces = Usuario::accessUser($_POST['email'], $_POST['password']);
    //         if($acces){
    //             $_SESSION['user']['email']= $_POST['email'];
    //             $_SESSION['user']['password']= $_POST['password'];
    //             header('Location: http://localhost/php_act/p1/');
    //         }else{
    //                     require_once 'views/sign-up-user.php';
    //                     include_once 'assets/includes/footer.php';
    //         }
    //     }else{
    //         require_once 'views/sign-up-user.php';
    //         include_once 'assets/includes/footer.php';

    //     }


    // }
    public static function acceder(){
        include_once 'assets/includes/cabecera.php';
        require_once 'modelo/usuarioDAO.php';
        
        if(isset($_POST['email'], $_POST['password'])){
            $acces = Usuario::accessUser($_POST['email'], $_POST['password']);
            if($acces){
                $_SESSION['user']['email']= $_POST['email'];
                $_SESSION['user']['password']= $_POST['password'];
                //comparamos el resultado con el id_rol, si este es igual a 1 accede al panel admin sino a la pagina normal
                if($_SESSION['user']['email'] == 'dani@dani.com'){
                    include_once 'views/panelAdmin.php';

                }else{
                    header('Location: https://danifernandez.bernat2023.tk/p2/');
                }
                
            }else{
                        require_once 'views/sign-up-user.php';
                        include_once 'assets/includes/footer.php';
            }
        }else{
            require_once 'views/sign-up-user.php';
            include_once 'assets/includes/footer.php';

        }


    }


    public static function registro(){
        include_once 'assets/includes/cabecera.php';
        require_once 'modelo/usuarioDAO.php';
       
        if(isset($_POST['email'], $_POST['nombre'], $_POST['apellido'],$_POST['password'])){
            //encriptamos la password
            $password = md5($_POST['password']);
            //registramos el usuario
            Usuario::addUser($_POST['email'], $_POST['nombre'], $_POST['apellido'],$password);
        }
       
        include_once 'views/registrarUser.php';
        include_once 'assets/includes/footer.php';

    }
    public static function cerrarSesion(){
        include_once 'assets/includes/cabecera.php';
        require_once 'modelo/usuarioDAO.php';
        //destruimos la sesion
       session_destroy();
       //enviamos al usuario a la pagina principal
       header('Location: https://danifernandez.bernat2023.tk/p2//');


    }
    public static function perfil(){
        include_once 'assets/includes/cabecera.php';
        require_once 'modelo/usuarioDAO.php';
        Usuario::miPerfil($_SESSION['user']['email'],$_SESSION['user']['password']);
        include_once 'views/perfil.php';
        include_once 'assets/includes/footer.php';


    }


}