<?php

 class ciudad extends DB {

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

    public function delete_ciudad($Nombre_ciudad){
        try {
            $query=parent::connect->prepare("DELETE FROM ciudad WHERE Nombre_ciudad= ? "); 
            $quey->bindParam(1,$Nombre_ciudad,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }
    }
 }












?>