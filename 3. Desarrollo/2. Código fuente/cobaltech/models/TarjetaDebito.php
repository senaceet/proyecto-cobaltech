<?php

    class TarjetaDebito extends DB {

        // listar tarjetas débito
        public function get_all(){
            try {
                $query=parent::connect()->prepare(
                    "SELECT *
                    FROM tarjeta_debito "
                );
                $query->execute();
                return $query->fetchAll(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // ver tarjeta débito por ID
        public function show_id(
            $id
            ){
            try {
                $query= parent::connect()->prepare(
                    "SELECT *
                    FROM tarjeta_debito
                    WHERE Id_tarjeta_debito = ?"
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