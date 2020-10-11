<?php

    class Proveedor extends DB {

        // listar proveedores
        public function get_all(){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM proveedor"
                );
                $query->execute();
                return $query->fetchAll(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // ver proveedor por ID
        public function get_id(
            $id
            ){
            try {
                $query=parent::connect()->prepare(
                    "SELECT *
                    FROM proveedor
                    WHERE Id_proveedor=?"
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

        // guardar proveedor
        public function store_proveedor(
            $Id_proveedor,
            $Razon_social,
            $Contacto,
            $Cargo,
            $Telefono,
            $Extension,
            $Movil,
            $Direccion,
            $Bodega,
            $Website,
            $Email
            ){
            try {
                $query=parent::connect()->prepare(
                    "INSERT INTO proveedor (
                        Id_proveedor,
                        Razon_social,
                        Contacto,
                        Cargo,
                        Telefono,
                        Extension,
                        Movil,
                        Direccion,
                        Bodega,
                        Website,
                        Email) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?)"
                );
                $query->bindParam(
                    1,
                    $Id_proveedor,
                    PDO::PARAM_INT
                );
                $query->bindParam(
                    2,
                    $Razon_social,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    3,
                    $Contacto,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    4,
                    $Cargo,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    5,
                    $Telefono,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    6,
                    $Extension,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    7,
                    $Movil,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    8,
                    $Direccion,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    9,
                    $Bodega,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    10,
                    $Website,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    11,
                    $Email,
                    PDO::PARAM_STR
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // eliminar proveedor
        public function delete_proveedor(
            $Id_proveedor
            ){
            try {
                $query=parent::connect()->prepare(
                    "DELETE FROM proveedor 
                    WHERE Id_proveedor=?"
                );
                $query->bindParam(
                    1,
                    $Id_proveedor,
                    PDO::PARAM_INT
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            } 
        }

        // actualizar proveedor
        public function update_proveedor(
            $id,
            $Razon_social
            ){
            try {
                $query=parent::connect()->prepare(
                    "UPDATE proveedor 
                    SET Razon_social = ? 
                    WHERE Id_proveedor= ?"
                ); 
                $query->bindParam(
                    1,
                    $Razon_social,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    2,
                    $id,
                    PDO::PARAM_INT
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die ($e->getMessage()); 
            }
        }

        // ver porveedor por ID
        public function show_id($id){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM proveedor 
                    WHERE Id_proveedor= ?"
                );
                $query->bindParam(
                    1,
                    $id,
                    PDO::PARAM_INT
                );
                $query->execute();
                return $query->fetch(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

    }

?>