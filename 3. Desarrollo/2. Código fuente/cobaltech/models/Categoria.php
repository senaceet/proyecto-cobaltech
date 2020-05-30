<?php

class Categoria extends DB{
    
    public function get_all(){
        try {
            $query=parent::connect()->prepare("SELECT * FROM categoria");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die($e->getMessage());
        }
    }
    public function store_categoria($Nombre_categoria){
        try {
            $query=parent::connect()->prepare("INSERT INTO categoria (Nombre_categoria) VALUES (?)");
            $query->bindParam(1,$Nombre_categoria,PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());

        }
    }
    public function delete_categoria($Id_categoria){
        try {
            $query=parent::connect()->prepare("DELETE FROM categoria WHERE Id_categoria=?");
            $query->bindParam(1,$Id_categoria,PDO::PARAM_INT);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());

        } 
    }
    public function update_categoria($Id_categoria){
        try {
<<<<<<< HEAD
            $query=parent::connect()->prepare("UPDATE categoria SET Nombre_categoria='?' WHERE id=?"); 
=======
            $query=parent::connect()->prepare("UPDATE categoria SET Nombre_categoria='?' WHERE id='?'");
>>>>>>> 0fa5673c934d0243f5ccc0067ca21f3d74b8c7bb
            $query->bindParam(1,$Id_categoria,PDO::PARAM_STR);
            $query->execute(); 
        } catch (Exception $e) {
            die ($e->getMessage()); 
        }
    }
}
?>