
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Usuarios</h1>
          </div> 
          <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <a href="?controller=Usuarios&method=create" class="btn btn-success">Agregar Usuario</a><br><br>
                        <div class="section-body">
                        <div class="table-responsive">
                      <table class="table table-sm table-hover table-striped table-bordered">
                          <tr class="bg-info text-white ">
                        <td>ID</td>
                        <td>TIPO DOC</td>
                        <td>DOC USUARIO</td>
                        <td>PRIMER NOMBRE</td>
                        <td>SEGUNDO NOMBRE</td>
                        <td>PRIMER APELLIDO</td>
                        <td>SEGUNDO APELLIDO</td>
                        <td>CORREO ELECTRONICO</td>
                        <td>CONTRASEÑA</td>
                        <td>DIRECCIÓN</td>
                        <td>TELEFONO</td>
                        <td>MOVIL</td>
                        <td>OPCIONES</td>
                    </tr>
                        <?php
                        foreach(parent::get_all() as $result){
                        ?>
                    <tr>
                        <td><?php echo $result->Id_usuario ?></td>
                        <td><?php echo $result->Tipodoc.' - '.$result->Nombre_ciudad  ?></td>
                        <td><?php echo $result->Doc_usuario ?></td>
                        <td><?php echo $result->Primer_nombre?></td>
                        <td><?php echo $result->Segundo_nombre?></td>
                        <td><?php echo $result->Primer_apellido?></td>
                        <td><?php echo $result->Segundo_apellido?></td>
                        <td><?php echo $result->Correo_electronico?></td>
                        <td><?php echo $result->Contrasena?></td>
                        <td><?php echo $result->Direccion?></td>
                        <td><?php echo $result->Telefono?></td>
                        <td><?php echo $result->Movil?></td>
                        <td class="text-white">
                          <a href= "" class="btn btn-info btn-sm">Detalles</a>
                          <a href= "" class="btn btn-warning btn-sm">Editar</a>
                          <a href="?controller=Usuarios&method=delete&Id_usuario= <?php echo $result->Id_usuario ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                    <?php  } ?>
                </table>
                </div>
                <tr>
                   <td colspan="11" class="text-center"><?php echo count(parent::Get_All())?> Usuarios registrados </td>
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