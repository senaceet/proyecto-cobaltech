@extends('layouts.admin.app')
@section('title','Tipos de Pago')

@section('content')

<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Pagos</h1>
      </div>
      <div class="section-body">
         <div class="card">
            <div class="card-body">
               <a href="?controller=Efectivos&method=index" class="btn btn-info">Pagos en Efectivo</a>
               <a href="?controller=TarjetasCredito&method=index" class="btn btn-info">Pagos Tarjeta Credito</a>
               <a href="?controller=TarjetasDebito&method=index" class="btn btn-info">Pagos Tarjeta Debito</a><br><br>
               <div class="table-responsive">
                  <table class="table table-sm table-hover table-striped table-bordered">
                     <tr class="bg-success text-white ">
                        <th>ID</th>
                        <th>FACTURA</th>
                        <th>TARJETA CRÉDITO</th>
                        <th>TARJETA DÉBITO</th>
                        <th>EFECTIVO</th>
                        <th>OPCIONES</th>
                     </tr>
                     <?php
                        foreach(parent::get_all() as $result){
                     ?>
                     <tr>
                        <td><?php echo $result->Id_pago?></td>
                        <td><?php echo $result->FacturaId_factura?></td>
                        <td><?php echo $result->Tarjeta_creditoId_tarjeta_credito?></td>
                        <td><?php echo $result->Tarjeta_debitoId_tarjeta_debito ?></td>
                        <td><?php echo $result->EfectivoId_efectivo?></td>
                        <td class="text-white">
                           <a href="?controller=Pagos&method=show&Id_pago=<?php echo $result->Id_pago?>" class="btn btn-info btn-sm">Detalles</a>
                        </td>
                     </tr>
                     <?php } ?>
                  </table>
                  <tr>
                     <td colspan="6"><?php echo count(parent::get_all())?> Pagos registrados </td>
                  </tr>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<footer class="main-footer">
   <div class="footer-left">
      Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
   </div>
   <div class="footer-right">
      2.3.0
   </div>
</footer>

   </div>
</div>

@endsection