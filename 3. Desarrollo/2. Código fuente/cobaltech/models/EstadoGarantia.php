<?php

   class EstadoGarantia extends DB{

      // listar estados de garantía
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT *
               FROM Estado_garantia"
            );
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
         }
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // ver estado de la garantía por ID
      public function get_id(
         $id
         ){
         try {
            $query=parent::connect()->prepare(
               "SELECT *
               FROM Estado_garantia
               WHERE Id_estado_garantia=?"
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

      // guardar estado de garantía
      public function store_estado_garantia(){
         try {
            $query=parent::connect()->prepare(
               "INSERT INTO Estado_garantia (Estado_garantia)
               VALUES (?)"
            );
            $query->bindParam(
               1,
               $Estado_garantia,
               PDO::PARAM_STR
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // eliminar estado garantía
      public function delete_estado_garantia(
         $Id_estado_garantia
         ){
         try {
            $query=parent::connect()->prepare(
               "DELETE FROM Estado_garantia
               WHERE Id_estado_garantia = ?"
            );
            $query->bindParam(
               1,
               $Id_estado_garantia,
               PDO::PARAM_INT
            );
            $query->execute();
         }
         catch (Exception $e) {
            die($e->getMessage());
         } 
      }

      // actualizar estado de garantía
      public function update_estado_garantia(
         $id,
         $Estado_garantia
         ){
         try {
            $query=parent::connect()->prepare(
               "UPDATE Estado_garantia
               SET Estado_garantia = ?
               WHERE Id_estado_garantia = ?"
            ); 
            $query->bindParam(
               1,
               $Estado_garantia,
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