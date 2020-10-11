<?php

    class seguridad extends DB {
        
        // validación de sesión
        public function validar() {
            if(empty($_SESSION['USUARIO'])){
                header("location:?controller=Cobaltech&method=login");
            }
        }

        //registrar un usuario 
        public function registro_usuario(
         $Primer_nombre,
         $Primer_apellido,
         $Correo_electronico,
         $Contrasena,
         $RolId_rol,
         $CiudadId_ciudad,
         $Tipo_documentoId_tipodoc
         ){
         try {
            $query=parent::connect()->prepare(
               "INSERT INTO Usuario (
                  Primer_nombre,
                  Primer_apellido,
                  Correo_electronico,
                  Contrasena,
                  RolId_rol,
                  CiudadId_ciudad,
                  Tipo_documentoId_tipodoc
               )
               VALUES (?,?,?,?,?,?,?)");
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
            $query->bindParam(
               5,
               $RolId_rol,
               PDO::PARAM_INT
            );
            $query->bindParam(
               6,
               $CiudadId_ciudad,
               PDO::PARAM_INT
            );
            $query->bindParam(
               7,
               $Tipo_documentoId_tipodoc,
               PDO::PARAM_INT
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }
   }
?>