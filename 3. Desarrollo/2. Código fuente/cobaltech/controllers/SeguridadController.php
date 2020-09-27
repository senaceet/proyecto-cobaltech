<?php

    class SeguridadController extends Seguridad{

        // control de vistas
        public function login() {
            require_once('views/layout_user/header.php');
            require_once('views/landing/login.php');
            require_once('views/layout_user/footer.php');
        }

        // autentificación de usuario
        public function permiso(){
            $usuario=Usuario::get_email($_POST['correo_electronico']);
            
            if($usuario)
            { 
              if($usuario->Contrasena==$_POST['contrasena']){
               $_SESSION['USUARIO']=$usuario; 
               header("location:?controller=cobaltech&method=admin");
           }
            else{
                header("location:?controller=seguridad&method=login");
            }
                //header("location:?controller=seguridad&method=login");
            }
            /*

         

           
           
            }*/
        }

        // destrucción de la sesión
        public function logout(){
            unset($_SESSION['USUARIO']);
            session_destroy();
            header("location:?controller=cobaltech&method=index");
        }

    }

?>