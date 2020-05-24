<?php

class Pago extends DB{
   
    public function get_all(){
        try {
            $query=parent::connect()->prepare("SELECT * FROM pago 
                INNER JOIN factura
                INNER JOIN tarjeta_credito
                INNER JOIN tarjeta_debito
                INNER JOIN efectivo
                WHERE   pago.FacturaId_factura=factura.Id_factura
                AND     pago.Tarjeta_creditoId_tarjeta_credito=tarjeta_credito.Id_tarjeta_credito
                AND     pago.Tarjeta_debitoId_tarjeta_debito=tarjeta_debito.Id_tarjeta_debito
                AND     pago.EfectivoId_efectivo=efectivo.Id_efectivo
                ORDER BY pago.Id_pago asc");
            $query->execute();
            return  $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>