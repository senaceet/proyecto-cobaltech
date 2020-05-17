<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Categoría de productos</h1>
    </div>
    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <a href="" class="btn btn-info">Agregar categoría</a> <br><br>
          <table class="table table-sm table-hover table-striped table-bordered">
            <tr class="bg-success text-white ">
              <td>ID</td>
              <td>CATEGORIA</td>
            </tr>
            <?php
              foreach(parent::get_all() as $result){
            ?>
            <tr>
              <td><?php echo $result->Id_categoria ?></td>
              <td><?php echo $result->Nombre_categoria ?></td>
            </tr>
            <?php } ?>
            <tr>
              <td colspan="2" class="text-center"><?php echo count(parent::get_all()) ?> Productos registrados</td>
            </tr>
          </table>
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