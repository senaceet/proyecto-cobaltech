<?php

class Pago extends DB{
   
   public function get_all(){
      try {
         $query=parent::connect()->prepare(
         "SELECT DISTINCT p.Id_pago,
                        f.Id_factura,
                        tc.Id_tarjeta_credito,
                        td.Id_tarjeta_debito,
                        e.Id_efectivo
            FROM pago p
            INNER JOIN factura f
            INNER JOIN tarjeta_credito tc
            INNER JOIN tarjeta_debito td
            INNER JOIN efectivo e
            WHERE p.FacturaId_factura=f.Id_factura AND (
                  p.Tarjeta_creditoId_tarjeta_credito=tc.Id_tarjeta_credito OR
                  p.Tarjeta_debitoId_tarjeta_debito=td.Id_tarjeta_debito OR
                  p.EfectivoId_efectivo=e.Id_efectivo
            )
            ORDER BY p.Id_pago ASC
         ");
         $query->execute();
         return  $query->fetchAll(PDO::FETCH_OBJ);
      } catch (Exception $e) {
            die($e->getMessage());
      }
   }
}

?>