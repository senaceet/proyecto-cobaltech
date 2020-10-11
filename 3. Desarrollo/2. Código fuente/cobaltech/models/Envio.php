<?php

   class Envio extends DB {

      // listar envíos
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM Envio 
               INNER JOIN Factura 
               INNER JOIN Estado_envio
               WHERE Envio.FacturaId_factura=Factura.Id_factura
               AND Envio.Estado_envioId_estado_envio=Estado_envio.Id_estado_envio
               ORDER BY Envio.Id_envio asc"
            );
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // actualizar envío
      public function update_state_envio(
         $id_estado,
         $id
         ){
         try {
            $query=parent::connect()->prepare(
               "UPDATE Envio 
               SET Estado_envioId_estado_envio= ? 
               WHERE Id_envio= ? "
            );
            $query->bindParam(
               1,
               $id_estado,
               PDO::PARAM_INT
            );
            $query->bindParam(
               2,
               $id,
               PDO::PARAM_INT
            );
            $query->execute();
         }
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // ver envío por ID
      public function show_id(
         $id
         ){
         try {
            $query= parent::connect()->prepare(
               "SELECT * 
               FROM Envio 
               WHERE Id_envio = ?"
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