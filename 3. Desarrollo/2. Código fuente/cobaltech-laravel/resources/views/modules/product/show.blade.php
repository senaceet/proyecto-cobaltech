@extends('layouts.admin.app')
@section('title','Productos')

@section('content')

<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Detalles del producto</h1>
      </div>
      <div class="section-body">
         <div class="row">
            <div class="col-md-6">
               <div class="card">
                  <div class="card-body">
                     <a class="btn btn-info" href="?controller=Productos&method=index">Volver</a>
                     <form action="?controller=Proveedores&method=show" method="GET">
                        <?php $id=parent::show_id($_GET['Id_producto']); ?>
                        <table class="table table bordered">
                           
                           <tr>
                              <th class="bg-secundary">ID</th>
                              <td><?php echo $id->Id_producto?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Nombre del producto/th>
                              <td><?php echo $id->Nombre_producto?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Descripción</th>
                              <td><?php echo $id->Descripcion?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Existencias</th>
                              <td><?php echo $id->Existencia?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Imagen</th>
                              <td><?php echo $id->Imagen?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Precio</th>
                              <td><?php echo $id->Precio?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Categoria</th>
                              <td><?php echo $id->CategoriaId_categoria?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Marca</th>
                              <td><?php echo $id->MarcaId_marca?></td>
                           </tr>
                           <tr>
                              <th class="bg-secundary">Proveedor</th>
                              <td><?php echo $id->ProveedorId_proveedor?></td>
                           </tr>
                        </table>
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