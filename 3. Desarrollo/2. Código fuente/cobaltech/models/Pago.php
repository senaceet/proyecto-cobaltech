<?php

   class Pago extends DB{

      // listar pagos
      public function get_all(){
         try {
            $query=parent::connect()->prepare(
               "SELECT Id_pago,
                  FacturaId_factura,
                  Tarjeta_creditoId_tarjeta_credito,
                  Tarjeta_debitoId_tarjeta_debito,
                  EfectivoId_efectivo
               FROM Pago p,
                  Factura f,
                  Tarjeta_credito tc,
                  Tarjeta_debito td,
                  Efectivo e
               WHERE p.FacturaId_factura=f.Id_factura
               AND (p.Tarjeta_creditoId_tarjeta_credito=tc.Id_tarjeta_credito
               OR p.Tarjeta_debitoId_tarjeta_debito=td.Id_tarjeta_debito
               OR p.EfectivoId_efectivo=e.Id_efectivo)
               GROUP BY p.Id_pago"
            );
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
         } 
         catch (Exception $e) {
            die($e->getMessage());
         }
      }

      // ver detalles del pagoo por ID
      public function show_id(
         $id
         ){
         try {
            $query= parent::connect()->prepare(
               "SELECT * 
               FROM Pago 
               WHERE Id_pago = ?"
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