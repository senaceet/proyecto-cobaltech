
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Envíos</h1>
          </div>

          <div class="section-body">


             <table class="table">
              <tr>
               <td>ID</td>
               <td>Estado de envío del producto</td>
              </tr>
              <?php
              foreach(parent::get_all() as $result){
              ?>
                <tr>
                <td><?php echo $result->Id_estado_envio ?></td>
                <td><?php echo $result->estado_envio ?></td>
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
  </div>x