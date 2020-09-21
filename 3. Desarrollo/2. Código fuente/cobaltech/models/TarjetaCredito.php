<?php

class TarjetaCredito extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare("SELECT * FROM tarjeta_credito ");
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function show_id($id){
        try {
           $p= parent::connect()->prepare("SELECT * FROM tarjeta_credito WHERE Id_tarjeta_credito = ?");
           $p->bindParam(1,$id,PDO::PARAM_INT);
           $p->execute();
           return $p->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die ($e->getMessage());
        }
     }
}


?>