<?php

   class EstadoEnvio extends DB{

      // listar estados de envío
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM estado_envio"
            );
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // guardar estado de envío
      public function store_estado_envio(
         $Estado_envio
         ){
         try {
            $query=parent::connect()->prepare(
               "INSERT INTO estado_envio (Estado_envio) 
               VALUES (?)"
            );
            $query->bindParam(
               1,
               $Estado_envio,
               PDO::PARAM_STR
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // actualizar estado de envío
      public function update_estado_envio(
         $id,
         $Estado_envio
         ){
         try {
            $query=parent::connect()->prepare(
               "UPDATE estado_envio 
               SET Estado_envio = ? 
               WHERE Id_estado_envio = ?"
            ); 
            $query->bindParam(
               1,
               $Estado_envio,
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

      // eliminar estado de envío
      public function delete_estado_envio(
         $Id_estado_envio
         ){
         try{
            $query=parent::connect()->prepare(
               "DELETE FROM estado_envio
               WHERE Id_estado_envio=?"
            );
            $query->bindParam(
               1,
               $Id_estado_envio,
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