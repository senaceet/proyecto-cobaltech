<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Productos</h1>
        </div>
        <div class="section-body">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>NOMBRE</td>
                    <td>DESCRIPCIÓN</td>
                    <td>EXISTENCIAS</td>
                    <td>IMAGEN</td>
                    <td>PRECIO</td>
                </tr>
                <?php
                    foreach(parent::get_all() as $result){
                ?>
                <tr>
                    <td><?php echo $result->Id_producto ?></td>
                    <td><?php echo $result->Nombre_producto ?></td>
                    <td><?php echo $result->Descripcion ?></td>
                    <td><?php echo $result->Existencia ?></td>
                    <td><?php echo $result->Imagen ?></td>
                    <td><?php echo $result->Precio ?></td>
                </tr>
                <?php  } ?>
            </table>
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