<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Agregar Tipo Documento</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <form action="?controller=TiposDocs&method=store" method="POST">
                        <div class="form-group">
                           <label for="">Abreviatura Tipo Documento</label>
                           <input type="text" name="Abreviatura" class="form-control">
                           <label for="">Nombre de Tipo Documento</label>
                           <input type="text" name="Tipodoc" class="form-control">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Registrar</button>
                        <a class="btn btn-primary" href="?controller=TiposDocs&method=index">Cancelar</a>
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