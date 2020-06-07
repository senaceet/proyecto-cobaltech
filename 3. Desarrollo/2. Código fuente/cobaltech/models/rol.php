<?php

class Rol extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare("SELECT * FROM rol");
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function store_rol($Tipo_rol){
        try {
            $query=parent::connect()->prepare("INSERT INTO rol (Tipo_rol) VALUES (?)");
            $query->bindParam(1,$Tipo_rol,PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function delete_rol($Id_rol){
        try {
           $p= parent::connect()->prepare("DELETE FROM rol WHERE Id_rol=?");
           $p->bindParam(1,$Id_rol,PDO::PARAM_INT);
           $p->execute();
           
        } catch (Exception $e) {
           die ($e->getMessage());
        }
    }
    public function update_rol($id,$Tipo_rol){
        try {
            $query=parent::connect()->prepare("UPDATE rol SET Tipo_rol= ? WHERE Id_rol= ?"); 
            $query->bindParam(1,$Tipo_rol,PDO::PARAM_STR);
            $query->bindParam(2,$id,PDO::PARAM_INT);
            $query->execute();
             
        } catch (Exception $e) {
            die ($e->getMessage()); 
        }
    }
    public function get_id($id){
            try {
                $query=parent::connect()->prepare("SELECT * FROM rol WHERE Id_rol= ?");
                $query->bindParam(1,$id,PDO::PARAM_INT);
                $query->execute();
                return $query->fetch(PDO::FETCH_OBJ);
                
            } catch (Exception $e) {
               die($e->getMessage());
            }
        }
}

/*
 class rol extends DB {

    public function create_rol($Tipo_rol){
        try {
            $query=parent::connect->prepare("INSERT INTO rol (Tipo_rol) VALUES (?)");
            $query->bindParam(1,$Tipo_rol,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }

    }

    public function read_rol($Tipo_rol){
        try {
            $query=parent::connect->prepare("SELECT * FROM rol WHERE Tipo_rol= ? "); 
            $query->bindParam(1,$Tipo_rol,PDO::PARAM_STR);
            return $query->fetchAll(PDO::FETCH_OBJ);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        } 
    }

   
 }
*/

?>