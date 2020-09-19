@extends('layouts.admin.app')
@section('title','Roles')

@section('content')

<!-- Main Content -->
<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Roles</h1>
      </div>
      <div class="section-body">
         <div class="card">
         <?php  if(isset($_GET['process'])){ ?>
               <button class="alert alert-success"> 
               <?php echo $_GET['process'] ?>
               </button>
               <?php } ?>
            <div class="card-body">
               <a href="?controller=Roles&method=create" class="btn btn-info">Agregar Rol</a> <br><br>
               <div class="table-responsive">
                  <table class="table table-sm table-hover table-striped table-bordered">
                     <tr class="bg-success text-white ">
                        <th>ID</th>
                        <th>TIPO ROL</th>
                        <th>OPCIONES</th>
                     </tr>
                     <?php
                        foreach(parent::get_all() as $result){
                     ?>
                     <tr>
                        <td><?php echo $result->Id_rol ?></td>
                        <td><?php echo $result->Tipo_rol ?></td>
                        <td class="text-white">
                           <a  href="?controller=Roles&method=edit&Id_rol=<?php echo $result->Id_rol ?> " class="btn btn-warning btn-sm">Editar</a>
                           <a href="?controller=Roles&method=delete&Id_rol= <?php echo $result->Id_rol ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                     </tr>
                     <?php  } ?>
                  </table>
                  <tr>
                     <td colspan="3" class="text-center"><?php echo count(parent::get_all()) ?> Tipos Roles Registrados</td>
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