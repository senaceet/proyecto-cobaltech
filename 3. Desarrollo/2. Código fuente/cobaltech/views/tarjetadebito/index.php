
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tarjetas Debito</h1>
          </div> 
          <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <a href="" class="btn btn-info">Agregar Tarjeta Debito</a>
                        <a href="?controller=Pagos&method=index" class="btn btn-info">Volver a Pagos</a><br><br>
                        <div class="section-body">
                      <table class="table table-sm table-hover table-striped table-bordered">
                          <tr class="bg-success text-white ">
                            <td>ID</td>
                            <td>TRANSACCION</td>
                            <td>OPCIONES</td>
                              </tr>
                          <?php
                          foreach(parent::get_all() as $result){
                          ?>
                            <tr>
                                <td><?php echo $result->Id_tarjeta_debito ?></td>
                                <td><?php echo $result->Transaccion ?></td>
                                <td class="text-white">
                               <a class="btn btn-info btn-sm">Detalles</a>
                              </td>
                            </tr>
                         <?php  } ?>
                </table>
                <tr>
                  <td colspan="2"><?php echo count(parent::Get_All())?> Tarjetas débito registradas </td>
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