<?php

    class Rol extends DB{

        // listar roles
        public function get_all(){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM Rol"
                );
                $query->execute();
                return $query->fetchAll(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // ver rol por ID
        public function get_id(
            $id
            ){
            try {
                $query=parent::connect()->prepare(
                    "SELECT *
                    FROM Rol
                    WHERE Id_rol=?"
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

        // guardar rol
        public function store_rol(
            $Tipo_rol
            ){
            try {
                $query=parent::connect()->prepare(
                    "INSERT INTO Rol (Tipo_rol) 
                    VALUES (?)"
                );
                $query->bindParam(
                    1,
                    $Tipo_rol,
                    PDO::PARAM_STR
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // esiminar rol
        public function delete_rol(
            $Id_rol
            ){
            try {
                $query= parent::connect()->prepare(
                    "DELETE FROM Rol 
                    WHERE Id_rol=?"
                );
                $query->bindParam(
                    1,
                    $Id_rol,
                    PDO::PARAM_INT
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die ($e->getMessage());
            }
        }

        // actualizar rol
        public function update_rol(
            $id,
            $Tipo_rol
            ){
            try {
                $query=parent::connect()->prepare(
                    "UPDATE Rol 
                    SET Tipo_rol= ? 
                    WHERE Id_rol= ?"
                ); 
                $query->bindParam(
                    1,
                    $Tipo_rol,
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