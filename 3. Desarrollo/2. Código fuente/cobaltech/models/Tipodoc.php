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
    public function store_tipodoc($Abreviatura,$Tipodoc){
        try {
            $query=parent::connect()->prepare("INSERT INTO tipo_documento (Abreviatura,Tipodoc) VALUES (?,?)");
            $query->bindParam(1,$Abreviatura,PDO::PARAM_STR);
            $query->bindParam(2,$Tipodoc,PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function delete_tipodoc($Id_tipodoc){
        try {
           $p= parent::connect()->prepare("DELETE FROM tipo_documento WHERE Id_tipodoc=?");
           $p->bindParam(1,$Id_tipodoc,PDO::PARAM_INT);
           $p->execute();
           
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function update_tipodoc($id,$Abreviatura,$Tipodoc){
        try {
            $query=parent::connect()->prepare("UPDATE tipo_documento SET Abreviatura= ?,Tipodoc=? 
                                                WHERE Id_tipodoc=?"); 
            $query->bindParam(1,$Abreviatura,PDO::PARAM_STR);
            $query->bindParam(2,$Tipodoc,PDO::PARAM_STR);
            $query->bindParam(3,$id,PDO::PARAM_INT);
            $query->execute();
             
        } catch (Exception $e) {
            die ($e->getMessage()); 
        }
    }
    public function get_id($id){
        try {
            $query=parent::connect()->prepare("SELECT * FROM tipo_documento WHERE Id_tipodoc= ?");
            $query->bindParam(1,$id,PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
           die($e->getMessage());
        }
    }
}

?>