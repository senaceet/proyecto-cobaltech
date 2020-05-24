<?php

class Envio extends DB{
   
    public function get_all(){
        try {
        $query=parent::connect()->prepare(
            "SELECT * FROM envio INNER JOIN factura INNER JOIN estado_envio
            WHERE envio.FacturaId_factura=factura.Id_factura
            AND envio.Estado_envioId_estado_envio=estado_envio.Id_estado_envio
            ORDER BY envio.Id_envio asc");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
           die($e->getMessage());
        }
    }

}

?>