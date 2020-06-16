<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Actualizar estado de envío</h1>
      </div>
      <?php $est_envio=parent::get_id($_GET['Id_estado_envio']); ?>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <form action="?controller=EstadoEnvios&method=update" method="POST">
                        <input name="id" type="hidden" value="<?php echo $est_envio->Id_estado_envio ?>">
                           <div class="form-group">
                              <label for="">Nombre del estado de envío</label>
                              <input type="text" name="Estado_envio" class="form-control" value="<?php echo $est_envio->Estado_envio ?>">
                           </div>
                           <hr>
                           <button class="btn btn-primary" type="submit">Guardar</button>
                           <a class="btn btn-primary" href="?controller=EstadoEnvios&method=index">Cancelar</a>
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