<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Envíos</h1>
      </div>
      <div class="section-body">
         <div class="card">
            <div class="card-body">
               <a href="?controller=EstadoEnvios&method=index" class="btn btn-info">Modificar estados de envíos</a><br><br>
               <div class="table-responsive">
                  <table class="table table-sm table-hover table-striped table-bordered">
                     <tr class="bg-success text-white ">
                        <th>ID</th>
                        <th>CÓDIGO DE RASTREO</th>
                        <th>FACTURA</th>
                        <th>ESTADO DE ENVÍO</th>
                        <th>OPCIONES</th>
                     </tr>
                     <?php
                        foreach(parent::get_all() as $result){
                     ?>
                     <tr>
                     <form action="?controller=Envios&method=update_st_envio" method="post">
                        <td><?php echo $result->Id_envio ?></td>
                        <td><?php echo $result->Codigo_rastreo ?></td>
                        <td><?php echo $result->Id_factura ?></td>
                        <td>
                        <input type="hidden" value="<?php echo $result->Id_envio ?>" name="Id_envio">
                          <select name="Id_estado_envio" id="Id_estado_envio" class="form-control">
                              <?php foreach(EstadoEnvio::get_all() as $r){ ?>
                                 <option <?php echo $r->Id_estado_envio==$result->Estado_envioId_estado_envio ? 'selected' : '' ?> value="<?php echo $r->Id_estado_envio ?>"><?php echo $r->Estado_envio ?></option>
                              <?php } ?>
                          </select>
                          <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
                        </td>
                        <td class="text-white">
                           <a class="btn btn-info btn-sm">Detalles</a>
                        </td>
                        </form>
                     </tr>
                     <?php } ?>
                  </table>
                  <tr>
                     <td colspan="5"><?php echo count(parent::Get_All())?> Envíos registrados </td>
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