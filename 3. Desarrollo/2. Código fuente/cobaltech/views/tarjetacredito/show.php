<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Detalles Tarjeta Credito</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <a class="btn btn-info" href="?controller=TarjetasCredito&method=index">Volver</a>
                     <form action="?controller=TarjetasCredito&method=show" method="GET">
                        <?php $id=parent::show_id($_GET['Id_tarjeta_credito']); ?>
                        <table class="table table bordered">
                           <tr>
                              <th class="bg-secundary">ID</th>
                              <td><?php echo $id->Id_tarjeta_credito?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">TITULAR</th>
                              <td><?php echo $id->Titular?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">NUMERO</th>
                              <td><?php echo $id->Numero?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">FECHA VENCIMIENTO</th>
                              <td><?php echo $id->Fecha_vencimiento?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">CVV</th>
                              <td><?php echo $id->CVV?></td>
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