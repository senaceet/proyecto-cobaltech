<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Garantías</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                <a href="?controller=EstadoGarantias&method=index" class="btn btn-info">Modificar estados de garantía</a><br><br>
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-striped table-bordered">
                            <tr class="bg-success text-white ">
                                <td>ID</td>
                                <td>FECHA INGRESO</td>
                                <td>DESCRIPCIÓN</td>
                                <td>OPCIONES</td>
                            </tr>
                            <?php
                                foreach(parent::get_all() as $result){
                            ?>
                            <tr>
                                <td><?php echo $result->Id_garantia ?></td>
                                <td><?php echo $result->Fecha_ingreso ?></td>
                                <td><?php echo $result->Descripcion ?></td>
                                <td class="text-white">
                                    <a class="btn btn-info btn-sm">Detalles</a>
                                    <a class="btn btn-warning btn-sm">Editar</a>
                                    <a class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        <tr>
                            <td colspan="4"><?php echo count(parent::get_all())?> Garantías registradas </td>
                        </tr>
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