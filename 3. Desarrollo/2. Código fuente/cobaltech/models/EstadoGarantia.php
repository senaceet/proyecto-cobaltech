<?php

class EstadoGarantia extends DB{
   
   public function get_all(){
      try {
      $query=parent::connect()->prepare("SELECT * FROM estado_garantia");
      $query->execute();
      return  $query->fetchAll(PDO::FETCH_OBJ);
      } catch (Exception $e) {
      die($e->getMessage());
      }
   }

   public function store_estado_garantia(){
      try {
      $query=parent::connect()->prepare("INSERT INTO estado_garantia (Estado_garantia) VALUES (?)");
      $query->bindParam(1,$Estado_garantia, PDO::PARAM_STR);
      $query->execute();
      } catch (Exception $e) {
      die($e->getMessage());
   }
   }
   public function delete_estado_garantia($Id_estado_garantia){
      try {
         $query=parent::connect()->prepare("DELETE FROM estado_garantia WHERE Id_estado_garantia=?");
         $query->bindParam(1,$Id_estado_garantia,PDO::PARAM_INT);
         $query->execute();
      } catch (Exception $e) {
         die($e->getMessage());
      } 
   }
   
   public function update_estado_garantia($id,$Estado_garantia){
      try {
         $query=parent::connect()->prepare("UPDATE estado_garantia SET Estado_garantia = ? WHERE Id_estado_garantia = ?"); 
         $query->bindParam(1,$Estado_garantia,PDO::PARAM_STR);
         $query->bindParam(2,$id,PDO::PARAM_INT);
         $query->execute();
      } catch (Exception $e) {
         die ($e->getMessage()); 
      }
   }
   public function get_id($id){
      try {
         $query=parent::connect()->prepare("SELECT * FROM estado_garantia WHERE Id_estado_garantia = ?");
         $query->bindParam(1,$id,PDO::PARAM_INT);
         $query->execute();
         return $query->fetch(PDO::FETCH_OBJ);
         } catch (Exception $e) {
         die($e->getMessage());
      }
   }

}

?>