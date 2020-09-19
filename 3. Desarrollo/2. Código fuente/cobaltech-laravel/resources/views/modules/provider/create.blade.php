@extends('layouts.admin.app')
@section('title','Proveedores')

@section('content')

<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Agregar Proveedor</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <form action="?controller=Proveedores&method=store" method="POST">
                        <div class="form-group">
                           <label for="">ID PROVEEDOR</label>
                           <input type="text" name="Id_proveedor" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="">RAZÓN SOCIAL</label>
                           <input type="text" name="Razon_social" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="">CONTACTO</label>
                           <input type="text" name="Contacto" class="form-control">
                        </div>  
                        <div class="form-group">
                           <label for="">CARGO</label>
                           <input type="text" name="Cargo" class="form-control">
                        </div>    
                        <div class="form-group">
                           <label for="">TELEFONO</label>
                           <input type="text" name="Telefono" class="form-control">
                        </div>  
                        <div class="form-group">
                           <label for="">EXTENSION</label>
                           <input type="text" name="Extension" class="form-control">
                        </div>   
                        <div class="form-group">
                           <label for="">MOVIL</label>
                           <input type="text" name="Movil" class="form-control">
                        </div>    
                        <div class="form-group">
                           <label for="">DIRECIÓN</label>
                           <input type="text" name="Dirección" class="form-control">
                        </div>   
                        <div class="form-group">
                           <label for="">BODEGA</label>
                           <input type="text" name="Bodega" class="form-control">
                        </div>    
                        <div class="form-group">
                           <label for="">WEBSITE</label>
                           <input type="text" name="Website" class="form-control">
                        </div>    
                        <div class="form-group">
                           <label for="">EMAIL</label>
                           <input type="text" name="Email" class="form-control"> 
                        </div>       
                        <hr>
                        <button class="btn btn-info" type="submit">Guardar</button>
                        <a class= "btn btn-info" href="?controller=Proveedores&method=index">Cancelar</a>
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

@endsection