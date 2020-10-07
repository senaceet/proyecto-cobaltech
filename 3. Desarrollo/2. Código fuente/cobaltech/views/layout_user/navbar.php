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
       <ul class="">
          <li class="">
             <a href="?controller=cobaltech&method=category">Accesorios</a>
             <!-- <ul class="">
                <li><a href="#">Adaptadores y cables</a></li>
                <li><a href="#">Cámaras</a></li>
                <li><a href="#">Tiras LED</a></li>
             </ul> -->
          </li>
          <li>
             <a href="?controller=cobaltech&method=category">Almacenamiento</a>
             <!-- <ul>
                <li><a href="#">Discos duros HDD</a></li>
                <li><a href="#">Unidades de estado solido SSD</a></li>
             </ul> -->
          </li>
          <li>
             <a href="?controller=cobaltech&method=category">Componentes</a>
             <!-- <ul>
                <li><a href="#">Chasis/cajas/torres</a></li>
                <li><a href="#">Enfriadores CPU Cooler</a></li>
                <li><a href="#">Fuentes de poder PSU</a></li>
                <li><a href="#">Memorias RAM</a></li>
                <li><a href="#">Pasta térmica</a></li>
                <li><a href="#">Procesadores CPU</a></li>
                <li><a href="#">Tarjetas de sonido</a></li>
                <li><a href="#">Tarjetas de video GPU</a></li>
                <li><a href="#">Tarjetas madre MainBoard</a></li>
                <li><a href="#">Ventiladores</a></li>
             </ul> -->
          </li>
          <li>
             <a href="?controller=cobaltech&method=category">Computadores</a>
             <!-- <ul>
                <li><a href="#">PC de escritorio</a></li>
                <li><a href="#">Portátiles</a></li>
                <li><a href="#">Servidores</a></li>
             </ul> -->
          </li>
          <li>
             <a href="?controller=cobaltech&method=category">Perifericos</a>
             <!-- <ul>
                <li><a href="#">Controles para juegos</a></li>
                <li><a href="#">Diademas</a></li>
                <li><a href="#">Impresoras</a></li>
                <li><a href="#">Monitores</a></li>
                <li><a href="#">Microfonos</a></li>
                <li><a href="#">Mouse y padmouse</a></li>
                <li><a href="#">Parlante</a></li>
                <li><a href="#">Teclados</a></li>
             </ul> -->
          </li>
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