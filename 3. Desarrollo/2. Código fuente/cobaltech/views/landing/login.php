<!-- LOGIN CONTENT -->

<div class="super_container_inner">
   <div class="super_overlay"></div>
            
      <!-- Home -->
      <div class="home">

<div class="container justify-content-between">
    <div class="row ">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">INICIO DE SESIÓN</h5>
                    <form action="?controller=seguridad&method=permiso" method="post">
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input id="" class="form-control" type="text" name="correo_electronico">
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input id="" class="form-control" type="password" name="contrasena">
                        </div>
                        <button class="button ml-auto mr-auto" type="submit">Ingresar</button>
                    </form>
                    <!-- <p class="card-text">Content</p> -->
               </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">REGISTRO</h5>
                    <form action="?controller=seguridad&method=store" method="post">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" name="Primer_nombre">
                        </div>
                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input class="form-control" type="text" name="Primer_apellido">
                        </div>
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" name="Correo_electronico">
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input class="form-control" type="password" name="Contrasena">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="RolId_rol" value="3">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="CiudadId_ciudad" value="1">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="Tipo_documentoId_tipodoc" value="1">
                        </div>
                        <button class="button ml-auto mr-auto" type="submit">Registrarse</button>
                    </form>
                    <!-- <p class="card-text">Content</p> -->
                </div>
            </div>
        </div>
    </div>
</div>