<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Detalles Proveedor</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-6">
               <div class="card">
                  <div class="card-body">
                     <a class="btn btn-info" href="?controller=Proveedores&method=index">Volver</a>
                     <form action="?controller=Proveedores&method=show" method="GET">
                        <?php $id=parent::show_id($_GET['Id_proveedor']); ?>
                        <table class="table table bordered">
                           
                           <tr>
                              <th class="bg-secundary">ID</th>
                              <td><?php echo $id->Id_proveedor?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">RAZON SOCIAL</th>
                              <td><?php echo $id->Razon_social?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">CONTACTO</th>
                              <td><?php echo $id->Contacto?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">CARGO</th>
                              <td><?php echo $id->Cargo?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">TELEFONO</th>
                              <td><?php echo $id->Telefono?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">EXTENSIÓN</th>
                              <td><?php echo $id->Extension?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">MOVIL</th>
                              <td><?php echo $id->Movil?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">DIRECCIÓN</th>
                              <td><?php echo $id->Direccion?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">BODEGA</th>
                              <td><?php echo $id->Bodega?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">WEBSITE</th>
                              <td><?php echo $id->Website?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">EMAIL</th>
                              <td><?php echo $id->Email?></td>
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