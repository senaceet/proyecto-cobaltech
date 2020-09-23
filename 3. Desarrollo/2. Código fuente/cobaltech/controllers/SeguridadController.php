<?php

    class SeguridadController extends Seguridad{

        public function form_auth() {
            require_once('views/layout_user/header.php');
            require_once('views/seguridad/form_auth.php');
            require_once('views/layout_user/footer.php');
        }

        public function auth_user(){
            $usuario=Usuario::get_email($_POST['correo_electronico']);
            if(!$usuario){
                header("location:?controller=seguridad&method=form_auth");
            }
            if($usuario->contrasena==$_POST['contrasena']){
                $_SESSION['USUARIO']=$usuario; 
                header("location:?controller=cobaltech&method=admin");
            }
            else{
                header("location:?controller=seguridad&method=form_auth");
            }
            // var_dump($usuario);
        }

        public function destroy(){
            unset($_SESSION['USUARIO']);
            session_destroy();
            header("location:?controller=cobaltech&method=index");
        }

    }

?>