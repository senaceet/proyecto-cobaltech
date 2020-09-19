@extends('layouts.admin.app')
@section('title','Proveedores')

@section('content')

<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Actualizar Proveedor</h1>
      </div>
      <?php $proveedor=parent::get_id($_GET['Id_proveedor']); ?>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <form action="?controller=Proveedores&method=update" method="POST">
                        <input name="id" type="hidden" value="<?php echo $proveedor->Id_proveedor?>">
                        <div class="form-group">
                           <label for="">Nombre Razón Social</label>
                           <input type="text" name="Razon_social" class="form-control" value="<?php echo $proveedor->Razon_social?>">
                           <label for="">Contacto Proveedor</label>
                           <input type="text" name="Contacto" class="form-control" value="<?php echo $proveedor->Contacto?>">
                           <label for="">Cargo Proveedor</label>
                           <input type="text" name="Cargo" class="form-control" value="<?php echo $proveedor->Cargo?>">
                           <label for="">Telefono Proveedor</label>
                           <input type="tel" name="Telefono" class="form-control" value="<?php echo $proveedor->Telefono?>">
                           <label for="">Extensión Proveedor</label>
                           <input type="text" name="Extension" class="form-control" value="<?php echo $proveedor->Extension?>">
                           <label for="">Movil Proveedor</label>
                           <input type="tel" name="Movil" class="form-control" value="<?php echo $proveedor->Movil?>">
                           <label for="">Dirección Proveedor</label>
                           <input type="text" name="Direccion" class="form-control" value="<?php echo $proveedor->Direccion?>">
                           <label for="">Bodega Proveedor</label>
                           <input type="text" name="Bodega" class="form-control" value="<?php echo $proveedor->Bodega?>">
                           <label for="">Website Proveedor</label>
                           <input type="text" name="Website" class="form-control" value="<?php echo $proveedor->Website?>">
                           <label for="">Email Proveedor</label>
                           <input type="email" name="Email" class="form-control" value="<?php echo $proveedor->Email?>">
                        </div>
                        <hr>
                        <button class="btn btn-info" type="submit">Guardar</button>
                        <a class="btn btn-info" href="?controller=Proveedores&method=index">Cancelar</a>
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