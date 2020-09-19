@extends('layouts.admin.app')
@section('title','Productos')

@section('content')

<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Actualizar producto</h1>
      </div>
      <?php $producto=parent::get_id($_GET['Id_producto']); ?>
      <div class="section-body">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <form action="?controller=Productos&method=update" method="POST">
                        <input name="id" type="hidden" value="<?php echo $producto->Id_producto ?>">
                           <div class="form-group">
                              <label for="">Nombre del producto</label>
                              <input type="text" name="Nombre_producto" class="form-control" value="<?php echo $producto->Nombre_producto ?>">
                              <label for="">Descripción</label>
                              <input type="text" name="Descripcion" class="form-control" value="<?php echo $producto->Descripcion ?>">
                              <label for="">Existencias</label>
                              <input type="num" name="Existencia" class="form-control" value="<?php echo $producto->Existencia ?>">
                              <label for="">Imagen</label>
                              <input type="text" name="Imagen" class="form-control" value="<?php echo $producto->imagen ?>">
                              <label for="">Precio</label>
                              <input type="text" name="Precio" class="form-control" value="<?php echo $producto->Precio ?>">
                              <label for="">Categoria</label>
                              <input type="text" name="CategoriaId_categoria" class="form-control" value="<?php echo $producto->CategoriaId_categoria ?>">
                              <label for="">Marca</label>
                              <input type="text" name="MarcaId_marca" class="form-control" value="<?php echo $producto->MarcaId_marca ?>">
                              <label for="">Proveedor</label>
                              <input type="text" name="ProveedorId_proveedor" class="form-control" value="<?php echo $producto->ProveedorId_proveedor ?>">   
                           </div>
                           <hr>
                           <button class="btn btn-primary" type="submit">Guardar</button>
                           <a class="btn btn-primary" href="?controller=Productos&method=index">Cancelar</a>
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