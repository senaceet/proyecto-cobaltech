<!-- Menu -->

<div class="menu">

    <!-- Search -->
    <div class="menu_search">
       <form action="#" id="menu_search_form" class="menu_search_form">
          <input type="text" class="search_input" id="search_input" placeholder="Search Item" required="required">
          <button class="menu_search_button"><img src="assets/img/logos/search.png" alt=""></button>
       </form>
    </div>

    <!-- Navigation -->
    <div class="menu_nav">
        <?php /* foreach(parent::get_all() as $result) { ?>
            <ul>
            <!-- <a href="?controller=Categorias&method=edit&Id_categoria=<?php //echo $result->Id_categoria ?> "class="btn btn-warning btn-sm">Editar</a> -->
                <li><?php echo $result->Nombre_categoria ?></li>
            </ul>
        <?php } */ ?>
       <ul>
          <li><a href="?controller=Cobaltech&method=category">Accesorios</a></li>
          <li><a href="?controller=Cobaltech&method=category">Almacenamiento</a></li>
          <li><a href="?controller=Cobaltech&method=category">Componentes</a></li>
          <li><a href="?controller=Cobaltech&method=category">Computadores</a></li>
          <li><a href="?controller=Cobaltech&method=category">Perifericos</a></li>
       </ul>
    </div>

    <!-- Contact Info -->
    <div class="menu_contact">
       <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
          <div>
             <div>
                <img src="assets/img/icons/phone.svg" alt="phone icon">
                <!-- Icon autor: https://www.flaticon.com/authors/freepik -->
             </div>
          </div>
          <div>+57(1)-252-7350</div>
       </div>

       <div class="menu_social">
          <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
             <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             <li><a href="https://www.youtube.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
             <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
             <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
       </div>
    </div>
</div>