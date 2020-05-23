
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tarjetas Credito</h1>
          </div>
          <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <a href="?controller=Pagos&method=index" class="btn btn-info">Volver a Pagos</a><br><br>
                        <div class="section-body">
                      <table class="table table-sm table-hover table-striped table-bordered">
                          <tr class="bg-success text-white ">
                            <td>ID</td>
                            <td>TITULAR</td>
                            <td>NUMERO</td>
                            <td>FECHA VENCIMIENTO</td>
                            <td>CVV</td>
                            <td>OPCIONES</td>
                          </tr>
                          <?php
                            foreach(parent::get_all() as $result){
                            ?>
                            <tr>
                              <td><?php echo $result->Id_tarjeta_credito ?></td>
                              <td><?php echo $result->Titular ?></td>
                              <td><?php echo $result->Numero ?></td>
                              <td><?php echo $result->Fecha_vencimiento ?></td>
                              <td><?php echo $result->CVV?></td>
                              <td class="text-white">
                               <a class="btn btn-info btn-sm">Detalles</a>
                              </td>
                            </tr>
                    <?php  } ?>
                </table>
                <tr>
                  <td colspan="5"><?php echo count(parent::Get_All())?> Tarjetas crédito registradas </td>
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