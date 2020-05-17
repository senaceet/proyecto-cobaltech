<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Listado de las ciudades</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <a href="?controller=Ciudades&method=create" class="btn btn-info">Crear nueva ciudad</a> <br><br>
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-striped table-bordered">
                            <tr class="bg-success text-white ">
                                <td>ID</td>
                                <td>CIUDAD</td>
                                <td>OPCIONES</td>
                            </tr>
                            <?php
                                foreach(parent::get_all() as $result){
                            ?>
                            <tr>
                                <td><?php echo $result->Id_ciudad ?></td>
                                <td><?php echo $result->Nombre_ciudad ?></td>
                                <td>
                                    <a class="btn btn-info btn-sm">Detalles</a>
                                    <a class="btn btn-warning btn-sm">Editar</a>
                                    <a class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="2" class="text-center"><?php echo count(parent::get_all()) ?> Ciudades registradas</td>
                            </tr>
                        </table>
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