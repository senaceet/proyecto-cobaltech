<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Facturas</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm table-hover table-striped table-bordered">
                        <tr class="bg-success text-white ">
                            <td>ID</td>
                            <td>FECHA</td>
                            <td>TOTAL</td>
                            <td>USUARIO</td>
                            <td>PRODUCTO</td>
                            <td>OPCIONES</td>
                        </tr>
                        <?php
                            foreach(parent::get_all() as $result){
                        ?>
                        <tr>
                            <td><?php echo $result->Id_factura ?></td>
                            <td><?php echo $result->Fecha_venta ?></td>
                            <td><?php echo $result->Total ?></td>
                            <td><?php echo $result->Primer_nombre.' '.$result->Segundo_nombre.' '.$result->Primer_apellido.' '.$result->Segundo_apellido?></td>
                            <td><?php echo $result->Nombre_producto ?></td>
                            <td class="text-white">
                                <a class="btn btn-info btn-sm">Detalles</a>
                                <a class="btn btn-warning btn-sm">Editar</a>
                                <a class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                    <tr>
                        <td colspan="4"><?php echo count(parent::get_all())?> Facturas </td>
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