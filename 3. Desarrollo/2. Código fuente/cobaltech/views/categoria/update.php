<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Editar Categoría</h1>
      </div>
      <div class="section-body">
         <div class="card">
            <div class="card-body">
               <a href="?controller=Categorias&method=update" class="btn btn-info">Cambiar categoría</a> <br><br>
               <div class="table-responsive">
                  <table class="table table-sm table-hover table-striped table-bordered">
                     <tr class="bg-success text-white ">
                        <th>ID</th>
                        <th>CATEGORIA</th>
                     </tr>
                     <?php
                        foreach(parent::get_all() as $result){
                     ?>
                     <tr>
                        <td><?php echo $result->Id_categoria ?></td>
                        <td><?php echo $result->Nombre_categoria ?></td>
                        <td class="text-white">
                           <a href= "?controller=Categorias&method=update&Id_categoria"class="btn btn-warning btn-sm">Editar</a>
                        </td>
                     </tr>
                     <?php } ?>
                     <div>
                        <hr>
                           <button class="btn btn-primary" type="submit">Guardar</button>
                           <a class="btn btn-primary" href="?controller=Categorias&method=index">Cancelar</a>
                     </div>
                  </table>
               </div>
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




<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Editar categoría</h1>
        </div>
        <div class="section-body">
        <div class="row">
            <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                   <form action="?controller=Categorias&method=update" method="GET">
                        <div class="form-group">
                            
                                <label for="">Cambiar nombre de la categoría</label>
                                <input type="text" name="Nombre_categoria" class="form-control">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a class="btn btn-primary" href="?controller=Categorias&method=index">Cancelar</a>
                   </form>
               </div>
            </div>
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