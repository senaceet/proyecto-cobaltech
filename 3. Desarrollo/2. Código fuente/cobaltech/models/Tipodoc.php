<?php

    class Tipodoc extends DB {

        // listar tipos de documento
        public function get_all(){
            try {
                $query=parent::connect()->prepare(
                    "SELECT *
                    FROM Tipo_documento "
                );
                $query->execute();
                return  $query->fetchAll(PDO::FETCH_OBJ
                );
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // ver tipo de documento por ID
        public function get_id(
            $id
            ){
            try {
                $query=parent::connect()->prepare(
                    "SELECT *
                    FROM Tipo_documento
                    WHERE Id_tipodoc=?"
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

        // guardar tipo de documento
        public function store_tipodoc(
            $Abreviatura,
            $Tipodoc
            ){
            try {
                $query=parent::connect()->prepare(
                    "INSERT INTO Tipo_documento(
                        Abreviatura,
                        Tipodoc
                    )
                    VALUES (?,?)"
                );
                $query->bindParam(
                    1,
                    $Abreviatura,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    2,
                    $Tipodoc,
                    PDO::PARAM_STR
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // eliminar tipo de documento
        public function delete_tipodoc(
            $Id_tipodoc
            ){
            try {
                $query=parent::connect()->prepare(
                    "DELETE FROM Tipo_documento 
                    WHERE Id_tipodoc=?"
                );
                $query->bindParam(
                    1,
                    $Id_tipodoc,
                    PDO::PARAM_INT
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die ($e->getMessage());
            }
        }

        // actualizar tipo de documento
        public function update_tipodoc(
            $id,
            $Abreviatura,
            $Tipodoc
            ){
            try {
                $query=parent::connect()->prepare(
                    "UPDATE Tipo_documento 
                    SET Abreviatura = ?,
                        Tipodoc = ? 
                    WHERE Id_tipodoc=?"
                );
                $query->bindParam(
                    1,
                    $Abreviatura,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    2,
                    $Tipodoc,
                    PDO::PARAM_STR
                );
                $query->bindParam(
                    3,
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