<?php

    class seguridad {
        
        // validación de sesión
        public function validar() {
            if(empty($_SESSION['USUARIO'])){
                header("location:?controller=cobaltech&method=login");
            }
        }

        //registrar un usuario 
        public function registro_usuario(
         $Primer_nombre,
         $Primer_apellido,
         $Correo_electronico,
         $Contrasena
         ){
         try {
            $query=parent::connect()->prepare(
               "INSERT INTO usuario (
                  Primer_nombre,
                  Primer_apellido,
                  Correo_electronico,
                  Contrasena
               )
               VALUES (?,?,?,?)");
            $query->bindParam(
               1,
               $Primer_nombre,
               PDO::PARAM_STR
            );
            $query->bindParam(
               2,
               $Primer_apellido,
               PDO::PARAM_STR
            );
            $query->bindParam(
               3,
               $Correo_electronico,
               PDO::PARAM_STR
            );
            $query->bindParam(
               4,
               $Contrasena,
               PDO::PARAM_STR
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }
   }
?>