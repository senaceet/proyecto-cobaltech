<?php

    class SeguridadController extends Seguridad{

        // autentificación de usuario
        public function permiso(){
            $usuario=Usuario::get_email($_POST['correo_electronico']);
            
            if($usuario)
            { 
                if($usuario->Contrasena==$_POST['contrasena'])
                {
                    $_SESSION['USUARIO']=$usuario; 
                    header("location:?controller=cobaltech&method=admin");
                }
                else{
                    header("location:?controller=cobaltech&method=login");
                }
            }
        }

           public function store(){
      parent::registro_usuario($_POST['Primer_nombre'],
                           $_POST['Primer_apellido'],
                           $_POST['Correo_electronico'],
                           $_POST['Contrasena']);
      header("location:?controller=cobaltech&method=index");
   }

        // destrucción de la sesión
        public function logout(){
            unset($_SESSION['USUARIO']);
            session_destroy();
            header("location:?controller=cobaltech&method=index");
        }

    }

?>