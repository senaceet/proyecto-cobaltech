<?php 

// Controlador landing
class CobaltechController{
   
   // Funciones landing usuario

   // inicio publico
   public function index(){
      require_once('views/layout_user/header.php');
     // require_once('views/layout_user/navbar.php');
      require_once('views/landing/index.php');
      require_once('views/layout_user/footer.php');
   }

   // carrito de compras
   public function cart(){
      require_once('views/layout_user/header.php');
      require_once('views/layout_user/navbar.php');
      require_once('views/landing/cart.php');
      require_once('views/layout_user/footer.php');
   }

   // productos por categorias
   public function category(){
      require_once('views/layout_user/header.php');
      require_once('views/layout_user/navbar.php');
      require_once('views/landing/category.php');
      require_once('views/layout_user/sidebar.php');
      require_once('views/layout_user/footer.php');
   }

   // pago y envio de productos
   public function checkout(){
      require_once('views/layout_user/header.php');
      require_once('views/layout_user/navbar.php');
      require_once('views/landing/checkout.php');
      require_once('views/layout_user/footer.php');
   }

   // ingreso de usuarios
   public function login() {
      require_once('views/layout_user/header.php');
     // require_once('views/layout_user/navbar.php');
      require_once('views/landing/login.php');
      require_once('views/layout_user/footer.php');
   }

   // vista detallada de los productos
   public function product(){
      require_once('views/layout_user/header.php');
      require_once('views/layout_user/navbar.php');
      require_once('views/landing/product.php');
      require_once('views/layout_user/footer.php');
   }
   // ---------- fin landing del usuario ----------


   // Función landing del administrador

   // inicio privado del administrador
   public function admin(){
      // validadcion de sesión (seguridad)
      // Seguridad::validar();
      require_once('views/layout_admin/header.php');
      require_once('views/layout_admin/navbar.php');
      require_once('views/layout_admin/sidebar.php');
      require_once('views/admin/index.php');
      require_once('views/layout_admin/footer.php');
   }

}

?>