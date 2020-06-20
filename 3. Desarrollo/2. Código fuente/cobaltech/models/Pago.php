<?php

class Pago extends DB{
   
   public function get_all(){
      try {
         $query=parent::connect()->prepare
         (" SELECT Id_pago,FacturaId_factura,Tarjeta_creditoId_tarjeta_credito,Tarjeta_debitoId_tarjeta_debito,EfectivoId_efectivo
            FROM pago p,factura f,tarjeta_credito tc,tarjeta_debito td,efectivo e
            WHERE p.FacturaId_factura=f.Id_factura
            AND (p.Tarjeta_creditoId_tarjeta_credito=tc.Id_tarjeta_credito
            OR p.Tarjeta_debitoId_tarjeta_debito=td.Id_tarjeta_debito
            OR p.EfectivoId_efectivo=e.Id_efectivo)
            GROUP BY p.Id_pago
         ");
         $query->execute();
      return  $query->fetchAll(PDO::FETCH_OBJ);
      } catch (Exception $e) {
            die($e->getMessage());
      }
   }

   public function show_id($id){
      try {
          $p= parent::connect()->prepare("SELECT * FROM pago WHERE Id_pago = ?");
          $p->bindParam(1,$id,PDO::PARAM_INT);
          $p->execute();
          return $p->fetchAll(PDO::FETCH_OBJ);
          } catch (Exception $e) {
          die ($e->getMessage());
          }
      }

      public function get_id($id){
         try {
             $query=parent::connect()->prepare("SELECT * FROM pago WHERE Id_pago=?");
             $query->bindParam(1,$id,PDO::PARAM_STR);
             $query->execute();
             return  $query->fetch(PDO::FETCH_OBJ);
         } catch (Exception $e) {
             die($e->getMessage());
         }
     }
   }

?>