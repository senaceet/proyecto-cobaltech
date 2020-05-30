<?php

class Ciudad extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare("SELECT * FROM ciudad");
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function get_id($id){
        try {
            $query=parent::connect()->prepare("SELECT * FROM ciudad  WHERE Id_ciudad=?");
            $query->bindParam(1,$id,PDO::PARAM_STR);
            $query->execute();
            return  $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function store_ciudad($Nombre_ciudad){
        try {
            $query=parent::connect()->prepare("INSERT INTO ciudad (Nombre_ciudad) VALUES (?)");
            $query->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function delete_ciudad($Id_ciudad){
        try {
           $p= parent::connect()->prepare("DELETE FROM ciudad WHERE Id_ciudad=?");
           $p->bindParam(1,$Id_ciudad,PDO::PARAM_INT);
           $p->execute();
           
        } catch (Exception $e) {
           die ($e->getMessage());
        }
}
public function update_ciudad($id,$Nombre_ciudad){
    try {
        $query=parent::connect()->prepare("UPDATE ciudad SET Nombre_ciudad = ? WHERE Id_ciudad = ?"); 
        $query->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
        $query->bindParam(2,$id,PDO::PARAM_INT);
        $query->execute(); 

    } catch (Exception $e) {
        die ($e->getMessage()); 
    }
}

}


/*
 class Ciudad extends DB {

    public function create_ciudad($Nombre_ciudad){
        try {
            $query=parent::connect->prepare("INSERT INTO ciudad (Nombre_ciudad) VALUES (?)");
            $query->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }

    }

    public function read_ciudad($Nombre_ciudad){
        try {
            $query=parent::connect->prepare("SELECT * FROM ciudad WHERE Nombre_ciudad= ? "); 
            $query->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
            return $query->fetchAll(PDO::FETCH_OBJ);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        } 
    }

    public function update_ciudad($Nombre_ciudad){
        try {
            $query=parent::connect->prepare("UPDATE ciudad(Nombre_ciudad) VALUES (?)"); 
            $query->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }
    }
 */

?>