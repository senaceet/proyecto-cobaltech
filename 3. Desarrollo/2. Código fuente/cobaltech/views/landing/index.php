<head>
<link rel="stylesheet" type="text/css" href="assets/css/main_styles.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<!-- MAIN CONTENT -->
<div class="super_container_inner">
    <div class="super_overlay"></div>

    <!-- Home -->
    <div class="home">
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(assets/img/background/background.png); opacity:0.8"></div>
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col fill_height">
                                <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                    <div class="home_content">
                                    <?php  if(isset($_GET['process'])){ ?>
               <button class="alert alert-success"> 
                  <?php echo $_GET['process'] ?>
               </button>
            <?php } ?>
                                       <a href="?controller=Cobaltech&method=product">
                                            <div class="home_title"><h1>Oferta 1</h1></div>
                                            <!-- <div class="home_subtitle">Summer Wear</div> -->
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                    </div>
                                                    <div class="col-lg-8 offset-md-2">
                                                            <div class="product_image"><img src="files/img/oferta 2.jpg" alt="">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="home_item_side">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(assets/img/background/background.png); opacity:0.8"></div>
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col fill_height">
                                <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                    <div class="home_content">
                                        <a href="?controller=Cobaltech&method=product">
                                            <div class="home_title"><h1>Oferta 2</h1></div>
                                            <!-- <div class="home_subtitle">Summer Wear</div> -->
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                    </div>
                                                    <div class="col-lg-8 offset-md-2">
                                                        <div class="product_image"><img src="files/img/oferta 3.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="home_item_side">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(assets/img/background/background.png); opacity:0.8"></div>
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col fill_height">
                                <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                    <div class="home_content">
                                        <a href="?controller=Cobaltech&method=product">
                                            <div class="home_title"><h1>Oferta 3</h1></div>
                                            <!-- <div class="home_subtitle">Summer Wear</div> -->
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                    </div>
                                                    <div class="col-lg-8 offset-md-2">
                                                        <div class="product_image"><img src="files/img/oferta.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="home_item_side">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(assets/img/background/background.png); opacity:0.8"></div>
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col fill_height">
                                <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                    <div class="home_content">
                                        <a href="?controller=Cobaltech&method=product">
                                            <div class="home_title"><h1>Oferta 4</h1></div>
                                            <!-- <div class="home_subtitle">Summer Wear</div> -->
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                    </div>
                                                    <div class="col-lg-8 offset-md-2">
                                                        <div class="product_image"><img src="files/img/oferta 3.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="home_item_side">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_dots">
                                <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
                                    <li class="home_slider_custom_dot active">01</li>
                                    <li class="home_slider_custom_dot">02</li>
                                    <li class="home_slider_custom_dot">03</li>
                                    <li class="home_slider_custom_dot">04</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Products -->
    <!-- CAMBIAR CATEGORIAS-->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section_title text-center">Categorías</div>
                </div>
            </div>
            <div class="row page_nav_row">
                <div class="col">
                    <div class="page_nav">
                        <ul class="d-flex flex-row align-items-start justify-content-center">
                            <li class="active"><a href="?controller=Cobaltech&method=category">Accesorios</a></li>
                            <li><a href="?controller=Cobaltech&method=category">Almacenamiento</a></li>
                            <li><a href="?controller=Cobaltech&method=category">Componentes</a></li>
                            <li><a href="?controller=Cobaltech&method=category">Computadores</a></li>
                            <li><a href="?controller=Cobaltech&method=category">Perifericos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row products_row">

                <!-- Product -->
                
            <?php 
                 $productos= new Producto();
                 $ps=$productos->get_all("LIMIT 6");
                 foreach($ps as $p){
            ?>
                <div class="col-xl-4 col-md-6">
                    <div class="product">
                        <div class="product_image" style="height:250px;overflow:hidden">
                            <img src="files/img/<?php echo $p->Imagen ?>" alt="">
                        </div>
                        <div class="product_content">
                            <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div>
                                        <div class="product_name"><a href="?controller=Cobaltech&method=product">
                                            <?php echo $p->Nombre_producto ?>
                                        </a></div>
                                        <div class="product_category"><a href="category.html">
                                            <?php echo $p->Nombre_categoria ?>
                                        </a></div>
                                    </div>
                                </div>
                                <div class="ml-auto text-right">
                                    <div class="product_price text-right">
                                        $<?php echo $p->Precio ?>
                                    </div>
                                </div>
                            </div>
                            <div class="product_buttons">
                                <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                    <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                        <div><div><img src="assets/img/icons/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

                

            </div>
            <div class="row load_more_row">
                <div class="col">
                    <div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>
                </div>
            </div>
        </div>
    </div>