<?php

// Modelo para todas las vistas del usuario
class Cobaltech extends DB{

   // Funciones carrito de compras

   // Categorías menú vista usuario 
   public function get_all(){
      try {
         $query=parent::connect()->prepare(
            "SELECT Nombre_categoria
            FROM categoria"
         );
         $query->execute();
         return $query->fetchAll(PDO::FETCH_OBJ);
      } 
      catch (Exception $e) {
         die($e->getMessage());
      }
   }

   // Funciones checkout

   // Funciones index vista usuario
   
   // Funciones login

   // Funciones productos vista usuario

}

?>