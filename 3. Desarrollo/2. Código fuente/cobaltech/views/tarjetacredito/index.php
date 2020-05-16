
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Lista Tarjetas Credito de la base de datos</h1>
          </div> 
          <div class="section-body">
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>TITULAR</td>
                        <td>NUMERO</td>
                        <td>FECHA VENCIMIENTO</td>
                        <td>CVV</td>
                    </tr>
                 <?php
                 foreach(parent::get_all() as $result){
                 ?>
                    <tr>
                        <td><?php echo $result->Id_tarjeta_credito ?></td>
                        <td><?php echo $result->Titular ?></td>
                        <td><?php echo $result->Numero ?></td>
                        <td><?php echo $result->Fecha_vencimiento ?></td>
                        <td><?php echo $result->Cvv ?></td>
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