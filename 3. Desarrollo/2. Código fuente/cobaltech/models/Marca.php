<?php

class Marca extends DB{
   
    public function get_all(){
        try {
        $query=parent::connect()->prepare("SELECT * FROM marca");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die($e->getMessage());
        }
    }

    public function store_marca($Nombre_marca){
        try {
            $query=parent::connect()->prepare("INSERT INTO marca (Nombre_marca) VALUES (?)");
            $query->bindParam(1,$Nombre_marca,PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete_marca($Id_marca){
        try{
            $query=parent::connect()->prepare("DELETE FROM marca WHERE Id_marca=?");
            $query->bindParam(1,$Id_marca,PDO::PARAM_INT);
            $query->execute();
        }catch (Exception $e) {
                die($e->getMessage());
            }
        
    }
}

?>