<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Tarjetas Debito</h1>
      </div> 
      <div class="section-body">
         <div class="card">
            <div class="card-body">
               <a href="?controller=Pagos&method=index" class="btn btn-info">Volver a Pagos</a><br><br>
               <div class="section-body">
                  <table class="table table-sm table-hover table-striped table-bordered">
                     <tr class="bg-success text-white ">
                        <th>ID</th>
                        <th>TRANSACCION</th>
                        <th>OPCIONES</th>
                     </tr>
                     <?php
                        foreach(parent::get_all() as $result){
                     ?>
                     <tr>
                        <td><?php echo $result->Id_tarjeta_debito ?></td>
                        <td><?php echo $result->Transaccion ?></td>
                        <td class="text-white">
                           <a href="?controller=TarjetasDebito&method=show&Id_tarjeta_debito=<?php echo $result->Id_tarjeta_debito ?> "class="btn btn-info btn-sm">Detalles</a>
                        </td>
                     </tr>
                     <?php  } ?>
                  </table>
                  <tr>
                     <td colspan="3"><?php echo count(parent::Get_All())?> Tarjetas débito registradas </td>
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