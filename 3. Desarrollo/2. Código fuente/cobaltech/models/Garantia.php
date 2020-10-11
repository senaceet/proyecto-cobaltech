<?php

    class Garantia extends DB{

        // listar garantías
        public function get_all(){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM Garantia 
                    INNER JOIN Factura 
                    INNER JOIN Estado_garantia
                    WHERE Garantia.FacturaId_factura=Factura.Id_factura
                    AND Garantia.Estado_garantiaId_estado_garantia=Estado_garantia.Id_estado_garantia"
                );
                $query->execute();
                return  $query->fetchAll(PDO::FETCH_OBJ);
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // actualizar estado de garantía
        public function update_state_garantia(
            $id_estado,
            $id
            ){
            try {
                $query=parent::connect()->prepare(
                    "UPDATE Garantia 
                    SET Estado_garantiaId_estado_garantia= ? 
                    WHERE Id_garantia= ? "
                );
                $query->bindParam(
                    1,
                    $id_estado,
                    PDO::PARAM_INT
                );
                $query->bindParam(
                    2,
                    $id,
                    PDO::PARAM_INT
                );
                $query->execute();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }  
        }

        // ver garantía por ID
        public function show_id($id){
            try {
                $query=parent::connect()->prepare(
                    "SELECT * 
                    FROM Garantia 
                    WHERE Id_garantia= ?"
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