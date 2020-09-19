@extends('layouts.admin.app')
@section('title','Usuarios')

@section('content')

<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Actualizar Usuario</h1>
      </div>
      <?php $usuario=parent::get_id($_GET['Id_usuario']); ?>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <form action="?controller=Usuarios&method=update" method="POST">
                        <input name="id" type="hidden" value="<?php echo $usuario->Id_usuario ?>">
                        <div class="form-group">
                           <label for="">Documento Usuario</label>
                           <input type="text" name="Doc_usuario" class="form-control" value="<?php echo $usuario->Doc_usuario ?>">
                           <label for="">Nombres Usuario</label>  
                           <input type="text" name="nombres" class="form-control" value="<?php echo $usuario->Primer_nombre." ".$usuario->Segundo_nombre;?>">
                           <label for="">Apellidos Usuario</label>
                           <input type="text" name="apellidos" class="form-control" value="<?php echo $usuario->Primer_apellido." ".$usuario->Segundo_apellido?>">
                           <label for="">Correo Usuario</label>
                           <input type="email" name="Correo_electronico" class="form-control" value="<?php echo $usuario->Correo_electronico?>">
                           <!--<input type="password" name="Contrasena" class="form-control" value="//<?php// echo $usuario->Contrasena?>">-->
                           <label for="">Dirección Usuario</label>
                           <input type="text" name="Direccion" class="form-control" value="<?php echo $usuario->Direccion?>">
                           <label for="">Telefono Usuario</label>
                           <input type="tel" name="Telefono" class="form-control" value="<?php echo $usuario->Telefono?>">
                           <label for="">Celular Usuario</label>
                           <input type="tel" name="Movil" class="form-control" value="<?php echo $usuario->Movil?>">
                           <label for="">Tipo Rol Usuario</label>
                           <input type="text" name="RolId_rol" class="form-control" value="<?php echo $usuario->RolId_rol?>">
                           <label for="">Ciudad del Usuario</label>
                           <input type="text" name="CiudadId_ciudad" class="form-control" value="<?php echo $usuario->CiudadId_ciudad?>">
                           <label for="">Tipo Documento Usuario</label>
                           <input type="text" name="Tipo_documentoId_tipodoc" class="form-control" value="<?php echo $usuario->Tipo_documentoId_tipodoc?>">  
                        </div>
                        <hr>
                        <button class="btn btn-info" type="submit">Guardar</button>
                        <a class="btn btn-info" href="?controller=Usuarios&method=index">Cancelar</a>
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

@endsection