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

}

?>