<?php

   class Efectivo extends DB {

      // listar pagos en efectivo
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM efectivo"
            );
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // ver pago en efectivo por ID
      public function show_id(
         $id
         ){
         try {
            $query= parent::connect()->prepare(
               "SELECT * 
               FROM efectivo 
               WHERE Id_efectivo = ?"
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
            die ($e->getMessage());
         }
      }

   }

?>