<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Usuarios</h1>
      </div> 
      <div class="section-body">
         <div class="card">
         <div class="card-body">
            <a href="?controller=Usuarios&method=create" class="btn btn-info">Agregar Usuario</a><br><br>
            <div class="section-body">
               <div class="table-responsive">
                  <table class="table table-sm table-hover table-striped table-bordered">
                     <tr class="bg-success text-white ">
                        <th>ID</th>
                        <th>TIPO DOC</th>
                        <th>DOC USUARIO</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>CORREO ELECTRONICO</th>
                        <th>CONTRASEÑA</th>
                        <th>DIRECCIÓN</th>
                        <th>TELEFONO</th>
                        <th>MOVIL</th>
                        <th>ROL</th>
                        <th>CIUDAD</th>
                        <th>OPCIONES</th>
                     </tr>
                     <?php
                        foreach(parent::get_all() as $result){
                     ?>
                     <tr>
                        <td><?php echo $result->Id_usuario ?></td>
                        <td><?php echo $result->Tipodoc?></td>
                        <td><?php echo $result->Doc_usuario ?></td>
                        <td><?php echo $result->Primer_nombre.' '.$result->Segundo_nombre?></td>
                        <td><?php echo $result->Primer_apellido.' '.$result->Segundo_apellido?></td>
                        <td><?php echo $result->Correo_electronico?></td>
                        <td><?php echo $result->Contrasena?></td>
                        <td><?php echo $result->Direccion?></td>
                        <td><?php echo $result->Telefono?></td>
                        <td><?php echo $result->Movil?></td>
                        <td><?php echo $result->Tipo_rol?></td>
                        <td><?php echo $result->Nombre_ciudad?></td>
                        <td class="text-white">
                           <a href= "" class="btn btn-info btn-sm">Detalles</a>
                           <a href= "" class="btn btn-warning btn-sm">Editar</a>
                           <a href="?controller=Usuarios&method=delete&Id_usuario= <?php echo $result->Id_usuario ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                     </tr>
                     <?php } ?>
                  </table>
               </div>
               <tr>
                  <td colspan="13" class="text-center"><?php echo count(parent::Get_All())?> Usuarios registrados </td>
               </tr>
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