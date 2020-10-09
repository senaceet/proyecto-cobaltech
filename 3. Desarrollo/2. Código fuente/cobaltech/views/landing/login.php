<head>
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<link rel="stylesheet" type="text/css" href="assets/css/login_responsive.css">
</head>

<!-- MAIN CONTENT -->

<div class="home">
        <div class="home_container d-flex flex-column align-items-center justify-content-end">
            <div class="home_content text-center">
                <div class="home_title">Login</div>
                <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                    <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                        <!-- <li><a href="#">Home</a></li>
                        <li>Your Cart</li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

<div class="super_container_inner">
    <div class="super_overlay"></div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
<!--                    <div class="section_title text-center">Categorías</div>-->
                </div>
            </div>

            <div class="row page_nav_row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-6">
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
                                        <div class="form-check">
                                            <input class="" type="checkbox">
                                            <label for="">Recuperar contraseña</label>
                                        </div>
                                        <button class="login_button" type="submit">Ingresar</button>
                                    </form>
                                    <!-- <p class="card-text">Content</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                                        <button class="login_button" type="submit">Registrarse</button>
                                    </form>
                                    <!-- <p class="card-text">Content</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

