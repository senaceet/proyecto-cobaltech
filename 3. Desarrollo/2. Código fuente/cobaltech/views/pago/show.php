<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Detalles de pago</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <a class="btn btn-info" href="?controller=Pagos&method=index">Volver</a>
                     <form action="?controller=Pagos&method=show" method="GET">
                        <?php $id=parent::show_id($_GET['Id_pago']); ?>
                        <table class="table table bordered">
                           <tr>
                              <th class="bg-secundary">ID</th>
                              <td><?php echo $id->Id_pago?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Factura</th>
                              <td><?php echo $id->FacturaId_factura ?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Número de tarjeta</th>
                              <td><?php echo $id->Tarjeta_creditoId_tarjeta_credito ?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Número de tarjeta</th>
                              <td><?php echo $id->Tarjeta_debitoId_tarjeta_debito ?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Pago en efectivo</th>
                              <td><?php echo $id->EfectivoId_efectivo ?></td>
                           </tr>
                        </table>
                     </form>
                  </div>
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