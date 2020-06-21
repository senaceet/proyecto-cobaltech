<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Detalles Usuario</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-5">
               <div class="card">
                  <div class="card-body">
                  <a class="btn btn-info" href="?controller=Usuarios&method=index">Volver</a>
                     <form action="?controller=Usuarios&method=show" method="GET">
                        <?php $id=parent::show_id($_GET['Id_usuario']); ?>
                        <table class="table table bordered">
                           <tr>
                              <th class="bg-secundary">ID</th>
                              <td><?php echo $id->Id_usuario?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">DOCUMENTO USUARIO</th>
                              <td><?php echo $id->Doc_usuario?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">NOMBRES USUARIO</th>
                              <td><?php echo $id->Primer_nombre.' '.$id->Segundo_nombre?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">APELLIDOS USUARIO</th>
                              <td><?php echo $id->Primer_apellido.' '.$id->Segundo_apellido?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">CORREO ELECTRONICO</th>
                              <td><?php echo $id->Correo_electronico?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">CONTRASEÑA</th>
                              <td><?php echo $id->Contrasena?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">DIRECCION</th>
                              <td><?php echo $id->Direccion?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">TELEFONO</th>
                              <td><?php echo $id->Telefono?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">MOVIL</th>
                              <td><?php echo $id->Movil?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">ROL USUARIO</th>
                              <td><?php echo $id->RolId_rol?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">CIUDAD</th>
                              <td><?php echo $id->CiudadId_ciudad?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">TIPO DOCUMENTO</th>
                              <td><?php echo $id->Tipo_documentoId_tipodoc?></td>
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