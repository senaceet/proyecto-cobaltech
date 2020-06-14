<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Detalles de envío</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-5">
               <div class="card">
                  <div class="card-body">
                     <form action="?controller=Envios&method=show" method="GET">
                        <?php $id=parent::show_id($_GET['Id_envio']); ?>
                        <table class="table table bordered">
                           <tr>
                              <th class="bg-secundary">ID</th>
                              <td><?php echo $id->Id_envio?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary"> Código de rastreo</th>
                              <td><?php echo $id->Codigo_rastreo?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Factura</th>
                              <td><?php echo $id->FacturaId_factura?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Estado del envío</th>
                              <td><?php echo $id->Estado_envioId_estado_envio ?></td>
                           </tr> 
                        </table>
                        <a class="btn btn-primary" href="?controller=Envios&method=index">Volver</a>
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