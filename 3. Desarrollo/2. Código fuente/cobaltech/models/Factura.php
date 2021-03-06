<?php

   class Factura extends DB{

      // listar facturas
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM Factura 
               INNER JOIN usuario 
               INNER JOIN producto
               WHERE factura.UsuarioId_usuario=usuario.Id_usuario
               AND factura.ProductoId_producto=producto.Id_producto
               ORDER BY factura.Id_factura asc"
            );
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // ver factura por ID
      public function show_id(
         $id
         ){
         try {
            $query= parent::connect()->prepare(
               "SELECT * 
               FROM Factura 
               WHERE Id_factura = ?"
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