<?php

 class tipo_documento extends DB {

    public function create_tipodoc($Tipodoc){
        try {
            $query=parent::connect->prepare("INSERT INTO tipo_documento (Tipodoc, Abreviatura) VALUES (?, ?)");
            $query->bindParam(1,$Tipodoc,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }

    }

    public function read_tipodoc($Tipodoc){
        try {
            $query=parent::connect->prepare("SELECT * FROM tipo_documento WHERE Tipodoc, Abreviatura= ?, ? "); 
            $query->bindParam(1,$Tipodoc,PDO::PARAM_STR);
            $query->bindParam(2,$Abreviatura,PDO::PARAM_STR); 
            return $query->fetchAll(PDO::FETCH_OBJ);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        } 
    }

    public function update_tipodoc($Tipodoc){
        try {
            $query=parent::connect->prepare("UPDATE tipo_documento(Tipodoc, Abreviatura) VALUES (?, ?)"); 
            $query->bindParam(1,$Tipodoc,PDO::PARAM_STR);
            $query->bindParam(2,$Abreviatura,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }
    }

    public function delete_tipodoc($Tipodoc){
        try {
            $query=parent::connect->prepare("DELETE FROM tipo_documento WHERE Tipodoc, Abreviatura= ?, ?"); 
            $query->bindParam(1,$Tipodoc,PDO::PARAM_STR);
            $query->bindParam(2,$Abreviatura,PDO::PARAM_STR);
            $query->execute(); 

        } catch (Exception $e) {
            die ($e->getMessage()); 
        }
    }
 }

?>