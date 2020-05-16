
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Proveedores de la base de datos</h1>
          </div>

          <div class="section-body">
                <table class="table">
                <tr>
                    <td>ID</td>
                    <td>RAZON SOCIAL</td>
                    <td>CONTACTO</td>
                    <td>CARGO</td>
                    <td>TELEFONO</td>
                    <td>EXTENSION</td>
                    <td>MOVIL</td>
                    <td>DIRECCION</td>
                    <td>BODEGA</td>
                    <td>WEBSITE</td>
                    <td>EMAIL</td>
                </tr>
              <?php
              foreach(parent::get_all() as $result){
              ?>
                <tr>
                    <td><?php echo $result->Id_proveedor ?></td>
                    <td><?php echo $result->Razon_social ?></td>
                    <td><?php echo $result->Contacto ?></td>
                    <td><?php echo $result->Cargo ?></td>
                    <td><?php echo $result->Telefono ?></td>
                    <td><?php echo $result->Extension ?></td>
                    <td><?php echo $result->Movil ?></td>
                    <td><?php echo $result->Direccion ?></td>
                    <td><?php echo $result->Bodega ?></td>
                    <td><?php echo $result->Website ?></td>
                    <td><?php echo $result->Email?></td>
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