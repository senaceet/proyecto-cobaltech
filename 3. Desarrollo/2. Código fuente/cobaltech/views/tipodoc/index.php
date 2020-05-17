
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tipo Documento</h1>
          </div> 
          <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <a href="" class="btn btn-success">Agregar Tipo Documento</a><br><br>
                        <div class="section-body">
                      <table class="table table-sm table-hover table-striped table-bordered">
                          <tr class="bg-info text-white ">
                        <td>ID</td>
                        <td>ABREVIATURA</td>
                        <td>TIPO DOCUMENTO</td>
                    </tr>
                 <?php
                 foreach(parent::get_all() as $result){
                 ?>
                    <tr>
                        <td><?php echo $result->Id_tipodoc ?></td>
                        <td><?php echo $result->Abreviatura ?></td>
                        <td><?php echo $result->Tipodoc?></td>
                    </tr>
                    <?php  } ?>
                </table>
                <tr>
                 <td colspan="3"><?php echo count(parent::Get_All())?> Tipos Documento Registrados </td>
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