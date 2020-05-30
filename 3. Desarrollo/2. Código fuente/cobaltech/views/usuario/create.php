<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Agregar Usuario</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <form action="?controller=Usuarios&method=store" method="POST">
                        <div class="form-group">
                           <label for="">DOCUMENTO USUARIO</label>
                           <input type="numb" name="Doc_usuario" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="">PRIMER NOMBRE</label>
                           <input type="text" name="Primer_nombre" class="form-control">
                        </div>  
                        <div class="form-group">
                           <label for="">SEGUNDO NOMBRE</label>
                           <input type="text" name="Segundo_nombre" class="form-control">
                        </div>    
                        <div class="form-group">
                           <label for="">PRIMER APELLIDO</label>
                           <input type="text" name="Primer_apellido" class="form-control">
                        </div>  
                        <div class="form-group">
                           <label for="">SEGUNDO APELLIDO</label>
                           <input type="text" name="Segundo_apellido" class="form-control">
                        </div>   
                        <div class="form-group">
                           <label for="">CORREO ELECTRONICO</label>
                           <input type="email" name="Correo_electronico" class="form-control">
                        </div>    
                        <div class="form-group">
                           <label for="">CONTRASEÑA</label>
                           <input type="password" name="Contrasena" class="form-control">
                        </div>   
                        <div class="form-group">
                           <label for="">DIRECCION</label>
                           <input type="text" name="Direccion" class="form-control">
                        </div>    
                        <div class="form-group">
                           <label for="">TELEFONO</label>
                           <input type="tel" name="Telefono" class="form-control">
                        </div>    
                        <div class="form-group">
                           <label for="">MOVIL</label>
                           <input type="tel" name="Movil" class="form-control"> 
                        </div>  
                        <div class="form-group">
                           <label for="">ROL</label>
                           <select name="RolId_rol" id="" class="form-control">
                              <option value="">Seleccionar...</option>
                              <?php foreach (Rol::get_all() as $result){ ?>
                              <option value="<?php echo $result->Id_rol ?>"><?php echo $result->Tipo_rol?></option>
                              <?php  }  ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="">CIUDAD</label>
                           <select name="CiudadId_ciudad" id="" class="form-control">
                              <option value="">Seleccionar...</option>
                              <?php foreach (Ciudad::get_all() as $result){ ?>
                              <option value="<?php echo $result->Id_ciudad ?>"><?php echo $result->Nombre_ciudad?></option>
                              <?php  }  ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="">TIPO DOCUMENTO</label>
                           <select name="Tipo_documentoId_tipodoc" id="" class="form-control">
                              <option value="">Seleccionar...</option>
                              <?php foreach (Tipodoc::get_all() as $result){ ?>
                              <option value="<?php echo $result->Id_tipodoc ?>"><?php echo $result->Tipodoc?></option>
                              <?php  }  ?>
                           </select>
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a class= "btn btn-primary" href="?controller=Usuarios&method=index">Cancelar</a>
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