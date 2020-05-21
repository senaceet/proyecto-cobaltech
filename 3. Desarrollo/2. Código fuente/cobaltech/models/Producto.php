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
            $query=parent::connect()->prepare("INSERT INTO (producto Id_producto, Nombre_producto, Descripcion, Existencia, Imagen, Precio, CategoriaId_categoria, MarcaId_marca, ProveedorId_proveedor)
            VALUES (?,?,?,?,?,?,?,?,?)");
            $query->bindParam(1,$Id_producto,PDO::PARAM_STR);
            $query->bindParam(2,$Nombre_producto,PDO::PARAM_STR);
            $query->bindParam(3,$Descripcion,PDO::PARAM_STR);
            $query->bindParam(4,$Existencia,PDO::PARAM_STR);
            $query->bindParam(5,$Imagen,PDO::PARAM_STR);
            $query->bindParam(6,$Precio,PDO::PARAM_STR);
            $query->bindParam(7,$CategoriaId_categoria,PDO::PARAM_INT);
            $query->bindParam(8,$MarcaId_marca,PDO::PARAM_INT);
            $query->bindParam(9,$ProveedorId_proveedor,PDO::PARAM_INT);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>