@extends('layouts.admin.app')
@section('title','Productos')

@section('content')

<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Productos</h1>
      </div>
      <div class="section-body">
         <div class="card">
            <div class="card-body">
               <a href="?controller=Productos&method=create" class="btn btn-info">Agregar Producto</a><br><br>
               <div class="section-body">
                  <div class="table-responsive">
                     <table class="table table-sm table-hover table-striped table-bordered">
                        <tr class="bg-success text-white">
                           <th>ID</th>
                           <th>NOMBRE</th>
                           <th>DESCRIPCIÓN</th>
                           <th>EXISTENCIAS</th>
                           <th>IMAGEN</th>
                           <th>PRECIO</th>
                           <th>CATEGORIA</th>
                           <th>MARCA</th>
                           <th>PROVEEDOR</th>
                           <th>OPCIONES</th>
                        </tr>
                        <?php
                           foreach(parent::get_all() as $result){
                        ?>
                        <tr>
                           <td><?php echo $result->Id_producto ?></td>
                           <td><?php echo $result->Nombre_producto ?></td>
                           <td><?php echo $result->Descripcion ?></td>
                           <td><?php echo $result->Existencia ?></td>
                           <td><?php echo $result->Imagen ?></td>
                           <td><?php echo $result->Precio ?></td>
                           <td><?php echo $result->Nombre_categoria?></td>
                           <td><?php echo $result->Nombre_marca ?></td>
                           <td><?php echo $result->Razon_social?></td>
                           <td class="text-  white">
                              <a href="?controller=Productos&method=show&Id_producto=<?php echo $result->Id_producto ?>"  class="btn btn-info btn-sm">Detalles</a>
                              <a href="?controller=Productos&method=edit&Id_producto=<?php echo $result->Id_producto ?>"  class="btn btn-warning btn-sm">Editar</a>
                              <a href="?controller=Productos&method=delete&Id_producto=<?php echo $result->Id_producto ?>" class="btn btn-danger btn-sm">Eliminar</a>
                           </td>
                        </tr>
                        <?php  } ?>
                     </table>
                  </div>
                  <tr>
                     <td colspan="6" class="text-center"><?php echo count(parent::get_all()) ?> Productos registrados</td>
                  </tr>
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