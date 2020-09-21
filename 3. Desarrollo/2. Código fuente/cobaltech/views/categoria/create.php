<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Agregar categoría</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <form action="?controller=Categorias&method=store" method="POST">
                        <div class="form-group">
                           <label for="">Nombre categoría</label>
                           <input type="text" name="Nombre_categoria" class="form-control">
                        </div>
                        <hr>
                        <button class="btn btn-info" type="submit">Guardar</button>
                        <a class="btn btn-info" href="?controller=Categorias&method=index">Cancelar</a>
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