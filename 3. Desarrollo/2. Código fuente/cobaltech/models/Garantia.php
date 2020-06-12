<?php

class Garantia extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare(
            "SELECT * FROM garantia INNER JOIN factura INNER JOIN estado_garantia
            WHERE garantia.FacturaId_factura=factura.Id_factura
            AND garantia.Estado_garantiaId_estado_garantia =estado_garantia.Id_estado_garantia");

            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update_state_garantia($id_estado, $id){
        try {
            $query=parent::connect()->prepare("UPDATE garantia SET Estado_garantiaId_estado_garantia= ? WHERE Id_garantia= ? ");
            $query->bindParam(1,$id_estado,PDO::PARAM_INT);
            $query->bindParam(2,$id,PDO::PARAM_INT);
            $query->execute();
           
            } catch (Exception $e) {
               die($e->getMessage());
            }  
    }
}

?>