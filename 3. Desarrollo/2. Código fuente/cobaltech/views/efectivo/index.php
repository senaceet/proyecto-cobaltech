
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Efectivo</h1>
            </div>
        <div class="section-body">

        <div class="card">
           <div class="card-body">
            <table class="table table-sm table-hover table-striped table-bordered">
                <tr class="bg-success text-white ">
               <td>ID</td>
               <td>Descripción</td>
              </tr>
              <?php
              foreach(parent::get_all() as $result){
              ?>
                <tr>
                <td><?php echo $result->Id_efectivo ?></td>
                <td><?php echo $result->Descripcion ?></td>
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