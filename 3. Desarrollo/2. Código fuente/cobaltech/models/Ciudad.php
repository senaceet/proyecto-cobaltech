<?php

   class Ciudad extends DB{

      // listar ciudades
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM Ciudad"
            );
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // ver ciudad por ID
      public function get_id(
         $id
         ){
         try {
            $query=parent::connect()->prepare(
               "SELECT *
               FROM Ciudad
               WHERE Id_ciudad=?"
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

      // guardar ciudad
      public function store_ciudad(
         $Nombre_ciudad
         ){
         try {
            $query=parent::connect()->prepare(
               "INSERT INTO Ciudad (Nombre_ciudad) 
               VALUES (?)"
            );
            $query->bindParam(
               1,
               $Nombre_ciudad,
               PDO::PARAM_STR
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // eliminar ciudad
      public function delete_ciudad(
         $Id_ciudad
         ){
         try {
            $query= parent::connect()->prepare(
               "DELETE FROM Ciudad 
               WHERE Id_ciudad=?"
            );
            $query->bindParam(
               1,
               $Id_ciudad,
               PDO::PARAM_INT
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die ($e->getMessage());
         }
      }

      // actualizar ciudad
      public function update_ciudad(
         $id,
         $Nombre_ciudad
         ){
         try {
            $query=parent::connect()->prepare(
               "UPDATE Ciudad 
               SET Nombre_ciudad = ? 
               WHERE Id_ciudad = ?"
            ); 
            $query->bindParam(
               1,
               $Nombre_ciudad,
               PDO::PARAM_STR
            );
            $query->bindParam(
               2,
               $id,
               PDO::PARAM_INT
            );
            $query->execute(); 
         } 
         catch (Exception $e) {
            die ($e->getMessage()); 
         }
      }

   }

?>