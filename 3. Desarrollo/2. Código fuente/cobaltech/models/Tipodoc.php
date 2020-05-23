<?php

class Tipodoc extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare("SELECT * FROM tipo_documento ");
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function store_tipodoc($Tipodoc){
        try {
            $query=parent::connect()->prepare("INSERT INTO rol (Tipodoc) VALUES (?)");
            $query->bindParam(1,$Tipodoc,PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function delete_tipodoc($Id_tipodoc){
        try {
           $p= parent::connect()->prepare("DELETE FROM tipodoc WHERE Id_tipodoc=?");
           $p->bindParam(1,$Id_tipodoc,PDO::PARAM_INT);
           $p->execute();
           
        } catch (Exception $e) {
           die ($e->getMessage());
        }
}
}

?>