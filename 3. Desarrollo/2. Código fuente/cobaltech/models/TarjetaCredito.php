<?php

    class TarjetaCredito extends DB {

        // listar tarjetas de crédito
        public function get_all(){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM tarjeta_credito "
                );
                $query->execute();
                return $query->fetchAll(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // ver tarjeta de crédito por ID
        public function show_id(
            $id
            ){
            try {
                $query= parent::connect()->prepare(
                    "SELECT * 
                    FROM tarjeta_credito 
                    WHERE Id_tarjeta_credito = ?"
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
                die ($e->getMessage());
            }
        }

    }

?>