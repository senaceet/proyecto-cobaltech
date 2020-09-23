<?php 

// Controlador landing
class CobaltechController{
   
   // Funciones landing usuario

   public function index(){
      require_once('views/layout_user/header.php');
      require_once('views/landing/index.php');
      require_once('views/layout_user/footer.php');
   }

   public function cart(){
      require_once('views/layout_user/header.php');
      require_once('views/landing/cart.php');
      require_once('views/layout_user/footer.php');
   }

   public function category(){
      require_once('views/layout_user/header.php');
      require_once('views/landing/category.php');
      require_once('views/layout_user/footer.php');
   }

   public function checkout(){
      require_once('views/layout_user/header.php');
      require_once('views/landing/checkout.php');
      require_once('views/layout_user/footer.php');
   }

   // public function form_auth(){
   //    require_once('views/layout_user/header.php');
   //    require_once('views/seguridad/form_auth.php');
   //    require_once('views/layout_user/footer.php');
   // }

   public function login(){
      require_once('views/layout_user/header.php');
      require_once('views/landing/login.php');
      require_once('views/layout_user/footer.php');
   }

   public function product(){
      require_once('views/layout_user/header.php');
      require_once('views/landing/product.php');
      require_once('views/layout_user/footer.php');
   }

   // Función landing administrador
   public function admin(){
      // Seguridad::validate();
      require_once('views/layout_admin/header.php');
      require_once('views/layout_admin/navbar.php');
      require_once('views/layout_admin/sidebar.php');
      require_once('views/admin/index.php');
      require_once('views/layout_admin/footer.php');
   }
}

?>