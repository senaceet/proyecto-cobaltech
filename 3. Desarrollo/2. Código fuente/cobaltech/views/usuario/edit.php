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
                                    <label for="">Datos del Usuario</label>
                                    <input type="" name="Doc_usuario" class="form-control" value="<?php echo $usuario->Doc_usuario ?>">
                                    <input type="text" name="Primer_nombre" class="form-control" value="<?php echo $usuario->Primer_nombre.' '.$usuario->Segundo_nombre?>">
                                    <input type="text" name="Primer_apellido" class="form-control" value="<?php echo $usuario->Primer_apellido.' '.$usuario->Segundo_apellido?>">
                                    <input type="email" name="Correo_electronico" class="form-control" value="<?php echo $usuario->Correo_electronico?>">
                                    <!--<input type="password" name="Contrasena" class="form-control" value="//<?php echo $usuario->Contrasena?>">-->
                                    <input type="text" name="Direccion" class="form-control" value="<?php echo $usuario->Direccion?>">
                                    <input type="tel" name="Telefono" class="form-control" value="<?php echo $usuario->Telefono?>">
                                    <input type="tel" name="Movil" class="form-control" value="<?php echo $usuario->Movil?>">
                                    <input type="text" name="RolTipo_rol" class="form-control" value="<?php echo $usuario->RolTipo_rol?>">
                                    <input type="text" name="CiudadId_ciudad" class="form-control" value="<?php echo $usuario->CiudadId_ciudad?>">
                                    <input type="text" name="Tipo_documentoId_tipodoc" class="form-control" value="<?php echo $Tipo_documentoId_tipodoc?>">
                                    
                                </div>
                                <hr>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a class="btn btn-primary" href="?controller=Usuarios&method=index">Cancelar</a>
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


