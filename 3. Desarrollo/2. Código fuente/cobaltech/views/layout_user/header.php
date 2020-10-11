<!-- HTML First Part -->

<!DOCTYPE html>
<html lang="es">
   <head>
      <title>Cobaltech</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Little Closet template">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
   </head>
   <body>

      <!-- Super Container Header -->

      <div class="super_container">

         <!-- Header -->

         <header class="header">
            <div class="header_overlay"></div>
               <div class="header_content d-flex flex-row align-items-center justify-content-start">
                  <div class="logo">
                     <a href="?controller=Cobaltech&method=index">
                        <div class="d-flex flex-row align-items-center justify-content-start">
                           <div>
                              <img src="assets/img/logos/logo-sm-1.png" alt="Cobaltech icon">
                           </div>
                           <div>Cobaltech</div>
                        </div>
                     </a>
                  </div>

                  <!-- Menu button -->
                  <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                   <nav class="main_nav">
                       <ul class="d-flex flex-row align-items-start justify-content-start">
                           <li class="active"><a href="?controller=Cobaltech&method=category">Accesorios</a></li>
                           <li><a href="?controller=Cobaltech&method=category">Almacenamiento</a></li>
                           <li><a href="?controller=Cobaltech&method=category">Componentes</a></li>
                           <li><a href="?controller=Cobaltech&method=category">Computadores</a></li>
                           <li><a href="?controller=Cobaltech&method=category">Perifericos</a></li>
                       </ul>
                   </nav>

                  <!-- Header bar -->

                  <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">

                     <!-- Search -->
                     <div class="header_search">
                        <form action="#" id="header_search_form">
                           <input type="text" class="search_input" id="search_input" placeholder="Buscar" required="required" autofocus>
                           <button class="header_search_button">
                              <img src="assets/img/icons/search.png" alt="search.png">
                           </button>
                        </form>
                        <div id="busqueda-productos" style="overflow-y: scroll; max-height: 200px; background-color: red;width: 400px;position: absolute;top:60px;z-index: 99;height: auto;">
                     </div>
                  </div>

                  <!-- User -->
                  <div class="user">
                     <a href="?controller=Cobaltech&method=login">
                        <div>
                           <img src="assets/img/icons/user.svg" alt="user.svg">
                           <!-- Icon autor: https://www.flaticon.com/authors/freepik -->
                        </div>
                     </a>
                  </div>

                  <!-- Cart -->
                  <div class="cart">
                     <a href="?controller=Cobaltech&method=cart">
                        <div>
                           <img src="assets/img/icons/cart.svg" alt="cart.svg">
                           <!-- Icon autor: https://www.flaticon.com/authors/freepik -->
                        </div>
                     </a>
                  </div>

                  <!-- Phone -->
                  <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                     <div>
                        <div>
                           <img src="assets/img/icons/phone.svg" alt="phone.svg">
                           <!-- Icon autor: https://www.flaticon.com/authors/freepik -->
                        </div>
                     </div>
                     <div>+57(1)-252-7350</div>
                  </div>
               </div>
            </div>
         </header>