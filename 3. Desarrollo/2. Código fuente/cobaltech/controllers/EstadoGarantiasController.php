<?php

class EstadoGarantiasController extends EstadoGarantia{
   /*
      Reporte de todos los datos de la entidad
    */
   public function index(){
      require_once('views/layout_admin/header.php');
      require_once('views/layout_admin/navbar.php');
      require_once('views/layout_admin/sidebar.php');
         
      require_once('views/estadogarantia/index.php');

      require_once('views/layout_admin/footer.php');
   }

   public function store(){
      parent::store_estado_garantia($_POST["Estado_garantia"]);
      header("location:?controller=EstadoGarantias&method=index");
   }
   public function edit(){
      require_once('views/layout_admin/header.php');
      require_once('views/layout_admin/navbar.php');
      require_once('views/layout_admin/sidebar.php');
         
      require_once('views/estadograntia/edit.php');

      require_once('views/layout_admin/footer.php');
   }
   public function delete(){
      parent::delete_estado_garantia($_GET['Id_estado_garantia']);
      header("location:?controller=EstadosGarantias&method=index");
   }
   public function update(){
      parent::update_estado_garantia($_POST['id'],$_POST['Estado_garantia']);
      header ("location:?controller=EstadosGarantias&method=index&process=Su estado de garantia se actualizo correctamente");
   }
}

?>