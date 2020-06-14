<?php

class Envio extends DB{
   
    public function get_all(){
        try {
        $query=parent::connect()->prepare(
            "SELECT * FROM envio INNER JOIN factura INNER JOIN estado_envio
            WHERE envio.FacturaId_factura=factura.Id_factura
            AND envio.Estado_envioId_estado_envio=estado_envio.Id_estado_envio
            ORDER BY envio.Id_envio asc");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die($e->getMessage());
        }
    }
    public function update_state_envio($id_estado, $id){
        try {
            $query=parent::connect()->prepare("UPDATE envio SET Estado_envioId_estado_envio= ? WHERE Id_envio= ? ");
            $query->bindParam(1,$id_estado,PDO::PARAM_INT);
            $query->bindParam(2,$id,PDO::PARAM_INT);
            $query->execute();
           
            } catch (Exception $e) {
               die($e->getMessage());
            }
         }
         public function get_id($id){
               try {
                  $query=parent::connect()->prepare("SELECT * FROM envio WHERE Id_envio= ?");
                  $query->bindParam(1,$id,PDO::PARAM_INT);
                  $query->execute();
               return $query->fetch(PDO::FETCH_OBJ);
               } catch (Exception $e) {
               die($e->getMessage());
               }
         }
         public function show_id($id){
               try {
                  $p= parent::connect()->prepare("SELECT * FROM envio WHERE Id_envio = ?");
                  $p->bindParam(1,$id,PDO::PARAM_INT);
                  $p->execute();
                  return $p->fetch(PDO::FETCH_OBJ);
               } catch (Exception $e) {
                  die ($e->getMessage());
               }
    
    }
}

?>