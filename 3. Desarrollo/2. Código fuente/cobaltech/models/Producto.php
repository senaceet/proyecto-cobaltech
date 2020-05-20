<?php

class Producto extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare("SELECT * FROM producto");
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function store_producto(){
        try {
            $query=parent::connect()->prepare("INSERT INTO (producto Id_producto, Nombre_producto, Descripcion, Existencia, Imagen, Precio)
            VALUES (?,?,?,?,?,?)");
            $query->bindParam(1,$Id_producto,PDO::PARAM_STR);
            $query->bindParam(1,$Nombre_producto,PDO::PARAM_STR);
            $query->bindParam(1,$Descripcion,PDO::PARAM_STR);
            $query->bindParam(1,$Existencia,PDO::PARAM_STR);
            $query->bindParam(1,$Imagen,PDO::PARAM_STR);
            $query->bindParam(1,$Precio,PDO::PARAM_STR);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>