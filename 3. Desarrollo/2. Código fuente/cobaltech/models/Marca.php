<?php

    class Marca extends DB {

        // listar marcas
        public function get_all(){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM marca"
                );
                $query->execute();
                return $query->fetchAll(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // ver marca por ID
        public function get_id(
            $id
            ){
            try {
                $query=parent::connect()->prepare(
                    "SELECT *
                    FROM marca
                      WHERE Id_marca=?"
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

        // guardar marca
        public function store_marca(
            $Nombre_marca
            ){
            try {
                $query=parent::connect()->prepare(
                    "INSERT INTO marca (Nombre_marca) 
                    VALUES (?)"
                );
                $query->bindParam(
                    1,
                    $Nombre_marca,
                    PDO::PARAM_STR
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // eliminar marca
        public function delete_marca(
            $Id_marca
            ){
            try{
                $query=parent::connect()->prepare(
                    "DELETE FROM marca 
                    WHERE Id_marca=?"
                );
                $query->bindParam(
                    1,
                    $Id_marca,
                    PDO::PARAM_INT
                );
                $query->execute();
            }
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // actualizar marca
        public function update_marca($id,$Nombre_marca){
            try {
                $query=parent::connect()->prepare(
                    "UPDATE marca 
                    SET Nombre_marca = ? 
                    WHERE Id_marca = ?"
                );
                $query->bindParam(
                    1,
                    $Nombre_marca,
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

    }

?>