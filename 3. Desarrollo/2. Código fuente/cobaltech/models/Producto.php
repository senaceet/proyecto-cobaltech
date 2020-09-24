<?php

    class Producto extends DB{

        // listar productos
        public function get_all(){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM producto 
                    INNER JOIN categoria 
                    INNER JOIN marca 
                    INNER JOIN proveedor
                    WHERE producto.CategoriaId_categoria=categoria.Id_categoria
                    AND producto.MarcaId_marca=marca.Id_marca
                    AND producto.ProveedorId_proveedor=proveedor.Id_proveedor
                    ORDER BY producto.Id_producto asc"
                );
                $query->execute();
                return $query->fetchAll(PDO::FETCH_OBJ);
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
                    "INSERT INTO producto(
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
                $query->bindParam(1,$Nombre_producto,PDO::PARAM_STR);
                $query->bindParam(2,$Descripcion,PDO::PARAM_STR);
                $query->bindParam(3,$Existencia,PDO::PARAM_STR);
                $query->bindParam(4,$Imagen,PDO::PARAM_STR);
                $query->bindParam(5,$Precio,PDO::PARAM_STR);
                $query->bindParam(6,$CategoriaId_categoria,PDO::PARAM_INT);
                $query->bindParam(7,$MarcaId_marca,PDO::PARAM_INT);
                $query->bindParam(8,$ProveedorId_proveedor,PDO::PARAM_INT);
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
                    "UPDATE producto 
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
                $query->bindParam(1,$Nombre_producto,PDO::PARAM_STR);
                $query->bindParam(2,$Descripcion,PDO::PARAM_STR);
                $query->bindParam(3,$Existencia,PDO::PARAM_STR);
                $query->bindParam(4,$Imagen,PDO::PARAM_STR);
                $query->bindParam(5,$Precio,PDO::PARAM_STR);
                $query->bindParam(6,$CategoriaId_categoria,PDO::PARAM_INT);
                $query->bindParam(7,$MarcaId_marca,PDO::PARAM_INT);
                $query->bindParam(8,$ProveedorId_proveedor,PDO::PARAM_INT);
                $query->bindParam(9,$id,PDO::PARAM_INT);
                $query->execute();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // ver producto por ID
        public function show_id($id){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM producto 
                    WHERE Id_producto=?"
                );
                $query->bindParam(1,$id,PDO::PARAM_STR);
                $query->execute();
                return $query->fetch(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // eliminar producto
        public function delete_producto($Id_producto){
            try {
                $query= parent::connect()->prepare(
                    "DELETE FROM producto 
                    WHERE Id_producto=?"
                );
                $query->bindParam(1,$Id_producto,PDO::PARAM_INT);
                $query->execute();
            } 
            catch (Exception $e) {
                die ($e->getMessage());
            }
        }
    
    }

?>