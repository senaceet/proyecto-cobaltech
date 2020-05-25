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
                        <td><?php echo $result->Id_envio ?></td>
                        <td><?php echo $result->Codigo_rastreo ?></td>
                        <td><?php echo $result->Id_factura ?></td>
                        <td><?php echo $result->Estado_envio?></td>
                        <td class="text-white">
                           <a class="btn btn-info btn-sm">Detalles</a>
                           <a class="btn btn-warning btn-sm">Editar</a>
                           <a class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
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