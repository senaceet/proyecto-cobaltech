
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Proveedores</h1>
          </div>
          <div class="section-body">
            <div class="card">
            <div class="card-body">
              <a href="" class="btn btn-success">Agregar Proveedor</a> <br><br>
              <div class="section-body">
                <table class="table table-sm table-hover table-striped table-bordered">
                <tr class="bg-info text-white ">
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
            <tr>
              <td colspan="11"><?php echo count(parent::Get_All())?> Proveedores Registrados </td>
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