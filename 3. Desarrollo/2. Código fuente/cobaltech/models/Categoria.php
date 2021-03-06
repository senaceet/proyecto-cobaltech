<?php

   class Categoria extends DB{

      // listar categorías
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM Categoria"
            );
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // ver categoria por id
      public function get_id($id){
         try {
            $query=parent::connect()->prepare(
               "SELECT * 
               FROM Categoria WHERE Id_categoria = ?"
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

      // guardar categoría
      public function store_categoria(
         $Nombre_categoria
         ){
         try {
            $query=parent::connect()->prepare(
               "INSERT INTO Categoria (Nombre_categoria) 
               VALUES (?)"
            );
            $query->bindParam(
               1,
               $Nombre_categoria,
               PDO::PARAM_STR
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // eliminar categoría
      public function delete_categoria(
         $Id_categoria
         ){
         try {
            $query=parent::connect()->prepare(
               "DELETE FROM Categoria 
               WHERE Id_categoria=?"
            );
            $query->bindParam(
               1,
               $Id_categoria,
               PDO::PARAM_INT
            );
            $query->execute();
         } 
         catch (Exception $e) {
            die($e->getMessage());
         } 
      }

      // actualizar categoría
      public function update_categoria(
         $id,
         $Nombre_categoria
         ){
         try {
            $query=parent::connect()->prepare(
               "UPDATE Categoria 
               SET Nombre_categoria= ? 
               WHERE Id_categoria= ?"
            ); 
            $query->bindParam(
               1,
               $Nombre_categoria,
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