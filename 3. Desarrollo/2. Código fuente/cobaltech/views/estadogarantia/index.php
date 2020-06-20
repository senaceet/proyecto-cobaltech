<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Estados de garantías</h1>
      </div>
      <div class="section-body">
         <div class="card">
            <div class="card-body">
               <a href="?controller=Garantias&method=create" class="btn btn-info">Agregar Estado Garantia</a>
               <a href="?controller=Garantias&method=index" class="btn btn-info">Volver a garantías</a><br><br>
               <div class="table-responsive">
                  <table class="table table-sm table-hover table-striped table-bordered">
                     <tr class="bg-success text-white ">
                        <th>ID</th>
                        <th>ESTADO DE GARANTÍA</th>
                        <th>OPCIONES</th>
                     </tr>
                     <?php
                        foreach(parent::get_all() as $result){
                     ?>
                     <tr>
                        <td><?php echo $result->Id_estado_garantia ?></td>
                        <td><?php echo $result->Estado_garantia ?></td>
                        <td class="text-white">
                           <a href="?controller=EstadoGarantias&method=edit&Id_estado_garantia= <?php echo $result->Id_estado_garantia ?> " class="btn btn-warning btn-sm">Editar</a>
                           <a href="?controller=EstadoGarantias&method=delete&Id_estado_garantia= <?php echo $result->Id_estado_garantia ?>"class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                     </tr>
                     <?php } ?>
                     <tr>
                        <td colspan="3"><?php echo count(parent::Get_All())?> Estado de la garantía </td>
                     </tr>
                  </table>
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