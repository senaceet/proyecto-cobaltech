<?php

class TarjetaDebito extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare("SELECT * FROM tarjeta_debito ");
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function show_id($id){
        try {
           $p= parent::connect()->prepare("SELECT * FROM tarjeta_debito WHERE Id_tarjeta_debito = ?");
           $p->bindParam(1,$id,PDO::PARAM_INT);
           $p->execute();
           return $p->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die ($e->getMessage());
        }
     }
}



?>