<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Estados de envío</h1>
      </div>
      <div class="section-body">
         <div class="card">
            <div class="card-body">
               <a href="?controller=Envios&method=index" class="btn btn-info">Volver a estado de envíos</a><br><br>
               <table class="table table-sm table-hover table-striped table-bordered">
                  <tr class="bg-success text-white ">
                     <th>ID</th>
                     <th>Estado de envío del producto</th>
                     <th>OPCIONES</th>
                  </tr>
                  <?php
                     foreach(parent::get_all() as $result){
                  ?>
                  <tr>
                     <td><?php echo $result->Id_estado_envio ?></td>
                     <td><?php echo $result->Estado_envio ?></td>
                     <td class="text-white">
                        <a class="btn btn-warning btn-sm">Editar</a>
                        <a class="btn btn-danger btn-sm">Eliminar</a>
                     </td>
                  </tr>
                  <?php } ?>
                  <tr>
                     <td colspan="2"><?php echo count(parent::Get_All())?> Estados de envío </td>
                  </tr>
               </table>
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