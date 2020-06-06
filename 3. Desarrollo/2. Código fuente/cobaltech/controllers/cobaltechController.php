<?php 

class cobaltechController{
      
   public function index(){
      require_once('views/layout_user/header.php');
      require_once('views/layout_user/navbar.php');
      require_once('views/layout_user/sidebar.php');
      require_once('views/index/index.php');
      require_once('views/layout_user/footer.php');
   }

   public function admin(){
      require_once('views/layout_admin/header.php');
      require_once('views/layout_admin/navbar.php');
      require_once('views/layout_admin/sidebar.php');
      require_once('views/admin/index.php');
      require_once('views/layout_admin/footer.php');
   }
}