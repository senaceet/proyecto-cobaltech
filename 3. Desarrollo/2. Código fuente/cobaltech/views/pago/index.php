<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pagos</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <a href="?controller=Efectivos&method=index" class="btn btn-info">Pagos en Efectivo</a>
                    <a href="?controller=TarjetasCredito&method=index" class="btn btn-info">Pagos Tarjeta Credito</a>
                    <a href="?controller=TarjetasDebito&method=index" class="btn btn-info">Pagos Tarjeta Debito</a><br><br>
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-striped table-bordered">
                            <tr class="bg-success text-white ">
                                <td>ID</td>
                                <td>FACTURA</td>
                                <td>TARJETA CRÉDITO</td>
                                <td>TARJETA DÉBITO</td>
                                <td>EFECTIVO</td>
                                <td>OPCIONES</td>
                            </tr>
                            <?php
                                foreach(parent::get_all() as $result){
                            ?>
                            <tr>
                                <td><?php echo $result->Id_pago ?></td>
                                <td><?php echo $result->Id_factura ?></td>
                                <td><?php echo $result->Id_tarjeta_credito ?></td>
                                <td><?php echo $result->Id_tarjeta_debito ?></td>
                                <td><?php echo $result->Id_efectivo ?></td>
                                <td class="text-white">
                                    <a class="btn btn-info btn-sm">Detalles</a>
                                    <a class="btn btn-warning btn-sm">Editar</a>
                                    <a class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    <tr>
                        <td colspan="6"><?php echo count(parent::get_all())?> Pagos registrados </td>
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