<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Pagos en efectivo</h1>
      </div>
      <div class="section-body">
         <div class="card">
            <div class="card-body">
               <a href="?controller=Pagos&method=index" class="btn btn-info">Volver a Pagos</a><br><br>
               <div class="table-responsive">
                  <table class="table table-sm table-hover table-striped table-bordered">
                     <tr class="bg-success text-white ">
                        <th>ID</th>
                        <th>DESCRIPCIÓN</th>
                        <th>OPCIONES</th>
                     </tr>
                     <?php
                        foreach(parent::get_all() as $result){
                     ?>
                     <tr>
                        <td><?php echo $result->Id_efectivo ?></td>
                        <td><?php echo $result->Descripcion ?></td>
                        <td class="text-white">
                           <a class="btn btn-info btn-sm">Detalles</a>
                        </td>
                     </tr>
                     <?php } ?>
                  </table>
                  <tr>
                     <td colspan="3" class="text-center"><?php echo count(parent::get_all()) ?> Pagos en efectivo registrados</td>
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