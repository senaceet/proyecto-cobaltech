<?php

   class Usuario extends DB {
      
      // para login con correo electronico
      public function get_email($email){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM Usuario 
               WHERE correo_electronico = ?"
            );
            $query->bindParam(
               1,
               $email,
               PDO::PARAM_STR
            );
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // listar usuarios
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM Usuario 
               INNER JOIN Tipo_documento 
               INNER JOIN Ciudad 
               INNER JOIN Rol
               WHERE Usuario.Tipo_documentoId_tipodoc=Tipo_documento.Id_tipodoc 
               AND Usuario.CiudadId_ciudad=Ciudad.Id_ciudad
               AND usuario.RolId_rol=Rol.Id_rol
               ORDER BY Usuario.Id_usuario desc"
            );
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }  
      }

      // ver usuario por ID
      public function get_id(
         $id
         ){
         try {
            $query=parent::connect()->prepare(
               "SELECT *
               FROM Usuario
               WHERE Id_usuario=?"
            );
            $query->bindParam(
               1,
               $id,
               PDO::PARAM_STR
            );
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // crear usuario
      public function store_usuario(
         $Doc_usuario,
         $Primer_nombre,
         $Segundo_nombre,
         $Primer_apellido,
         $Segundo_apellido,
         $Correo_electronico,
         $Contrasena,
         $Direccion,
         $Telefono,
         $Movil,
         $RolId_rol,
         $CiudadId_ciudad,
         $Tipo_documentoId_tipodoc
         ){
         try {
            $query=parent::connect()->prepare(
               "INSERT INTO Usuario (
                  Doc_usuario,
                  Primer_nombre,
                  Segundo_nombre,
                  Primer_apellido,
                  Segundo_apellido,
                  Correo_electronico,
                  Contrasena,
                  Direccion,
                  Telefono,
                  Movil,
                  RolId_rol,
                  CiudadId_ciudad,
                  Tipo_documentoId_tipodoc
               )
               VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $query->bindParam(
               1,
               $Doc_usuario,
               PDO::PARAM_STR
            );
            $query->bindParam(
               2,
               $Primer_nombre,
               PDO::PARAM_STR
            );
            $query->bindParam(
               3,
               $Segundo_nombre,
               PDO::PARAM_STR
            );
            $query->bindParam(
               4,
               $Primer_apellido,
               PDO::PARAM_STR
            );
            $query->bindParam(
               5,
               $Segundo_apellido,
               PDO::PARAM_STR
            );
            $query->bindParam(
               6,
               $Correo_electronico,
               PDO::PARAM_STR
            );
            $query->bindParam(
               7,
               $Contrasena,
               PDO::PARAM_STR
            );
            $query->bindParam(
               8,
               $Direccion,
               PDO::PARAM_STR
            );
            $query->bindParam(
               9,
               $Telefono,
               PDO::PARAM_STR
            );
            $query->bindParam(
               10,
               $Movil,
               PDO::PARAM_STR
            );
            $query->bindParam(
               11,
               $RolId_rol,
               PDO::PARAM_STR
            );
            $query->bindParam(
               12,
               $CiudadId_ciudad,
               PDO::PARAM_STR
            );
            $query->bindParam(
               13,
               $Tipo_documentoId_tipodoc,
               PDO::PARAM_STR
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // eliminar usuario
      public function delete_usuario(
         $Id_usuario
         ){
         try {
            $p= parent::connect()->prepare(
               "DELETE FROM Usuario 
               WHERE Id_usuario=?"
            );
            $p->bindParam(
               1,
               $Id_usuario,
               PDO::PARAM_INT
            );
            $p->execute();   
         } 
         catch (Exception $e) {
            die ($e->getMessage());
         }
      }

      // actualizar usuario
      public function update_usuario(
         $id,
         $Doc_usuario,
         $Primer_nombre,
         $Segundo_nombre,
         $Primer_apellido,
         $Segundo_apellido,
         $Correo_electronico,
         $Direccion,
         $Telefono,
         $Movil,
         $RolId_rol,
         $CiudadId_ciudad,
         $Tipo_documentoId_tipodoc
         ){
         try {
            $query=parent::connect()->prepare(
               "UPDATE Usuario
               SET Doc_usuario=?,
               Primer_nombre=?,
               Segundo_nombre=?,
               Primer_apellido=?,
               Segundo_apellido=?,
               Correo_electronico=?,
               Direccion=?,
               Telefono=?,
               Movil=?,
               RolId_rol=?,
               CiudadId_ciudad=?,
               Tipo_documentoId_tipodoc=?
               WHERE Id_usuario= ?"
            ); 
            $query->bindParam(
               1,
               $Doc_usuario,
               PDO::PARAM_INT
            );
            $query->bindParam(
               2,
               $Primer_nombre,
               PDO::PARAM_STR
            );
            $query->bindParam(
               3,
               $Segundo_nombre,
               PDO::PARAM_STR
            );
            $query->bindParam(
               4,
               $Primer_apellido,
               PDO::PARAM_STR
            );
            $query->bindParam(
               5,
               $Segundo_apellido,
               PDO::PARAM_STR
            );
            $query->bindParam(
               6,
               $Correo_electronico,
               PDO::PARAM_STR
            );
            /* 
            $query->bindParam(
               7,
               $Contrasena,
               PDO::PARAM_STR
            ); 
            */
            $query->bindParam(
               7,
               $Direccion,
               PDO::PARAM_STR
            );
            $query->bindParam(
               8,
               $Telefono,
               PDO::PARAM_STR
            );
            $query->bindParam(
               9,
               $Movil,
               PDO::PARAM_STR
            );
            $query->bindParam(
               10,
               $RolId_rol,
               PDO::PARAM_INT
            );
            $query->bindParam(
               11,
               $CiudadId_ciudad,
               PDO::PARAM_INT
            );
            $query->bindParam(
               12,
               $Tipo_documentoId_tipodoc,
               PDO::PARAM_INT
            );
            $query->bindParam(
               13,
               $id,
               PDO::PARAM_INT
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die ($e->getMessage()); 
         }
      }

      // un usuario por ID
      public function show_id($id){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM Usuario 
               WHERE Id_usuario= ?"
            );
            $query->bindParam(
               1,
               $id,
               PDO::PARAM_INT
            );
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

   }

?>