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
                  header("location:?controller=Cobaltech&method=admin");
               }
               else{
                  header("location:?controller=Cobaltech&method=login");
               }
            }
      }

      public function store(){
      parent::registro_usuario($_POST['Primer_nombre'],
                           $_POST['Primer_apellido'],
                           $_POST['Correo_electronico'],
                           $_POST['Contrasena'],
                           $_POST['RolId_rol'],
                           $_POST['CiudadId_ciudad'],
                           $_POST['Tipo_documentoId_tipodoc']);
      header("location:?controller=Cobaltech&method=index&process=Tu usuario se ha registrado correctamente");

   }

        // destrucción de la sesión
        public function logout(){
            unset($_SESSION['USUARIO']);
            session_destroy();
            header("location:?controller=Cobaltech&method=index");
        }

    }

?>