<?php

    class Producto extends DB{
        // listar productos
        public function get_all($limit = ""){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM Producto 
                    INNER JOIN Categoria 
                    INNER JOIN Marca 
                    INNER JOIN Proveedor
                    WHERE Producto.CategoriaId_categoria=Categoria.Id_categoria
                    AND Producto.MarcaId_marca=Marca.Id_marca
                    AND Producto.ProveedorId_proveedor=Proveedor.Id_proveedor
                    ORDER BY Producto.Id_producto asc $limit "
                );
                $query->execute();
                return $query->fetchAll(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // ver producto por ID
        public function get_id(
            $id
            ){
            try {
                $query=parent::connect()->prepare(
                    "SELECT *
                    FROM Producto
                    WHERE Id_producto=?"
                );
                $query->bindParam(
                    1,
                    $id,
                    PDO::PARAM_STR
                );
                $query->execute();
                return $query->fetch(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // guardar producto
        public function store_producto(
            $Nombre_producto,
            $Descripcion,
            $Existencia,
            $Imagen,
            $Precio,
            $CategoriaId_categoria,
            $MarcaId_marca,
            $ProveedorId_proveedor
            ){
            try {
                $query=parent::connect()->prepare(
                    "INSERT INTO Producto(
                        Nombre_producto,
                        Descripcion,
                        Existencia,
                        Imagen,
                        Precio,
                        CategoriaId_categoria,
                        MarcaId_marca,
                        ProveedorId_proveedor)
                    VALUES (?,?,?,?,?,?,?,?)"
                );
                $query->bindParam(
                    1,
                    $Nombre_producto,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    2,
                    $Descripcion,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    3,
                    $Existencia,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    4,
                    $Imagen,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    5,
                    $Precio,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    6,
                    $CategoriaId_categoria,
                    PDO::PARAM_INT
                );
                $query->bindParam(
                    7,
                    $MarcaId_marca,
                    PDO::PARAM_INT
                );
                $query->bindParam(
                    8,
                    $ProveedorId_proveedor,
                    PDO::PARAM_INT
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // actualizar producto
        public function update_producto(
            $id,
            $Nombre_producto,
            $Descripcion,
            $Existencia,
            $Imagen,
            $Precio,
            $CategoriaId_categoria,
            $MarcaId_marca,
            $ProveedorId_proveedor
            ){
            try {
                $query=parent::connect()->prepare(
                    "UPDATE Producto 
                    SET Nombre_producto=?,
                        Descripcion=?,
                        Existencia=?,
                        Imagen=?,
                        Precio=?,
                        CategoriaId_categoria=?,
                        MarcaId_marca=?,
                        ProveedorId_proveedor=?
                    WHERE  Id_producto=?"
                );
                $query->bindParam(
                    1,
                    $Nombre_producto,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    2,
                    $Descripcion,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    3,
                    $Existencia,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    4,
                    $Imagen,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    5,
                    $Precio,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    6,
                    $CategoriaId_categoria,
                    PDO::PARAM_INT
                );
                $query->bindParam(
                    7,
                    $MarcaId_marca,
                    PDO::PARAM_INT
                );
                $query->bindParam(
                    8,
                    $ProveedorId_proveedor,
                    PDO::PARAM_INT
                );
                $query->bindParam(
                    9,
                    $id,
                    PDO::PARAM_INT
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // ver producto por ID
        public function show_id(
            $id
            ){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM Producto 
                    WHERE Id_producto=?"
                );
                $query->bindParam(
                    1,
                    $id,
                    PDO::PARAM_STR
                );
                $query->execute();
                return $query->fetch(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // eliminar producto
        public function delete_producto(
            $Id_producto
            ){
            try {
                $query= parent::connect()->prepare(
                    "DELETE FROM Producto 
                    WHERE Id_producto=?"
                );
                $query->bindParam(
                    1,
                    $Id_producto,
                    PDO::PARAM_INT
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die ($e->getMessage());
            }
        }
        public function buscar_productos($q){
         //mysql ::LIKE
         try {
           $query=parent::connect()->prepare(
               "SELECT * 
               FROM Producto
               WHERE Nombre_producto
               LIKE ?
               ORDER BY Nombre_producto desc"
           );
           $query->bindParam(1,$q,PDO::PARAM_STR);
           $query->execute();
           return $query->fetchAll(PDO::FETCH_OBJ);
       } 
       catch (Exception $e) {
           die($e->getMessage());
       }
      }

    }


?>