<head>
<link rel="stylesheet" type="text/css" href="assets/css/category.css">
<link rel="stylesheet" type="text/css" href="assets/css/category_responsive.css">
</head>

<!-- CATEGORY CONTENT -->

<div class="super_container_inner">
   <div class="super_overlay"></div>
            
      <!-- Home -->
      <div class="home">

			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Categorías</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<!-- <li class=""><a href="?controller=Cobaltech&method=index"><h2>Inicio<h2></a></li>
							<li class=""><a href="category.html"><h2>Accesorios<h2></a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Products -->
		
		<div class="products">
			<div class="container">
				<div class="row products_bar_row">
					<div class="col">
						<div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
							<div class="products_bar_links">
								<!-- <ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="#">Gameplay</a></li><br>
									<li><a href="#">Pcs</a></li><br>
									<li class="active"><a href="#">Perisfericos</a></li><br>
									<li><a href="#">Otros productos</a></li><br>
								</ul> -->
							</div>
							<div class="products_bar_side d-flex flex-row align-items-center justify-content-start ml-lg-auto">
								<div class="products_dropdown product_dropdown_sorting">
									<div class="isotope_sorting_text"><span>Organizar por</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
									<ul>
										<!-- <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li> -->
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Precio</li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Nombre</li>
									</ul>
								</div>
								<!-- <div class="product_view d-flex flex-row align-items-center justify-content-start">
									<div class="view_item active"><img src="images/view_1.png" alt=""></div>
									<div class="view_item"><img src="images/view_2.png" alt=""></div>
									<div class="view_item"><img src="images/view_3.png" alt=""></div>
								</div> -->
								<div class="products_dropdown text-right product_dropdown_filter">
									<div class="isotope_filter_text"><span>Filtros</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
									<ul>
										<li class="item_filter_btn" data-filter="*">All</li>
										<li class="item_filter_btn" data-filter=".hot">Hot</li>
										<li class="item_filter_btn" data-filter=".new">New</li>
										<li class="item_filter_btn" data-filter=".sale">Sale</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row products_row products_container grid">
					
					<!-- Product -->

				<?php 
                 	$productos= new Producto();
                 	$ps=$productos->get_all("LIMIT 9");
                 	foreach($ps as $p){
            	?>

					<div class="col-xl-4 col-md-6 grid-item new">
						<div class="product">
							<div class="product_image" style="height:250px;overflow:hidden">
								<img src="files/img/<?php echo $p->Imagen ?>" alt="">
							</div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name">
												<a href="?controller=Cobaltech&method=product">
													<?php echo $p->Nombre_producto ?>
												</a></div>
											<!-- <div class="product_category"> <a href="category.html">Gameplay</a></div> -->
										</div>
									</div>
									<div class="ml-auto text-right">
										<!-- <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div> -->
										<div class="product_price text-right">
											$<?php echo $p->Precio ?>
										</div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<!-- <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div> -->
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
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								<li class="active"><a href="#">01</a></li>
								<li><a href="#">02</a></li>
								<li><a href="#">03</a></li>
								<li><a href="#">04</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>