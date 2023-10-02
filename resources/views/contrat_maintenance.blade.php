@extends('layouts.master')

@section('content')
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Grille de la boutique</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="accueil">Accueil</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Contrat de Maintenance</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Product Categories</h3>
        						<ul>
        							<li><a href="erp">ERP <span>(3)</span></a></li>
        							<li><a href="creation_site_web">Création des sites Web <span>(4)</span></a></li>
        							<li><a href="hebergement">Hébergements <span>(6)</span></a></li>
        							<li><a href="contrat_maintenance">Contrat de Maintenance <span>(7)</span></a></li>
        							<li><a href="serveurs">Serveurs<span>(8)</span></a></li>
        							<li><a href="ordinateurs_fixes">Ordinateurs Fixes<span>(9)</span></a></li>
        							<li><a href="ordinateures_portables">Ordinateurs Portables  <span>(13)</span></a></li>
        							<li><a href="imprimentes">Imprimantes<span>(20)</span></a></li>
        						</ul>
        					</aside>
        					<aside class="wedget__categories pro--range">
        						<h3 class="wedget__title">Filter by price</h3>
        						<div class="content-shopby">
        						    <div class="price_filter s-filter clear">
        						        <form action="#" method="GET">
        						            <div id="slider-range"></div>
        						            <div class="slider__range--output">
        						                <div class="price__output--wrap">
        						                    <div class="price--output">
        						                        <span>Price :</span><input type="text" id="amount" readonly="">
        						                    </div>
        						                    <div class="price--filter">
        						                        <a href="#">Filter</a>
        						                    </div>
        						                </div>
        						            </div>
        						        </form>
        						    </div>
        						</div>
        					</aside>
        					<!--aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Product Tags</h3>
        						<ul>
        							<li><a href="#">Laptops</a></li>
        							<li><a href="#">Tablets</a></li>
        							<li><a href="#">Keyboards</a></li>
        							<li><a href="#">Smartphones</a></li>
        							<li><a href="#">Smart watches</a></li>
        							<li><a href="#">TV</a></li>
        							<li><a href="#">Cameras</a></li>
        							<li><a href="#">Gaming consoles </a></li>
        							<li><a href="#">Mobile Phones</a></li>
        							<li><a href="#">Charging and batteries</a></li>
        							<li><a href="#">Accessories </a></li>
        							<li><a href="#">Joysticks & gamepads</a></li>
        							<li><a href="#">DVD & Blu-ray</a></li>
        						</ul>
        					</aside-->
        					<aside class="wedget__categories sidebar--banner">
								<img src="images/others/banner_left.jpg" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
			                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
			                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
			                        </div>
			                        <p>Showing 1–12 of 40 results</p>
			                        <div class="orderby__wrapper">
			                        	<span>Sort By</span>
			                        	<select class="shot__byselect">
			                        		<option>Default sorting</option>
			                        		<option>best-selling</option>
			                        		<option>price</option>
			                        		<option>Category</option>
			                        		<option>last arrival</option>
			                        		<option>Kids</option>
			                        	</select>
			                        </div>
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/1.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">Apple MacBook Pro 15" Touch Bar MPTU2LL/A 256GB (Silver)</a></h4>
											<ul class="prize d-flex">
												<li>$1599.00</li>
												<li class="old_prize">$1899.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="wishlist"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box color--2">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">Apple MacBook 12" MNYN2LL/A 512GB (Rose Gold)</a></h4>
											<ul class="prize d-flex">
												<li>$1549.00</li>
												<li class="old_prize">$1600.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart"><i class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="wishlist"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
	        					</div>
	        					<ul class="wn__pagination">
	        						<li class="active"><a href="#">1</a></li>
	        						<li><a href="#">2</a></li>
	        						<li><a href="#">3</a></li>
	        						<li><a href="#">4</a></li>
	        						<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
	        					</ul>
	        				</div>
	        				<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
	        					<div class="list__view__wrapper">
	        						<!-- Start Single Product -->
	        						<div class="list__view">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product"><img src="images/product/1.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product"><img src="images/product/2.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product">Apple MacBook Pro 15" Touch Bar MPTU2LL/A 256GB (Silver)</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Annoncé à l'occasion de l'IFA 2017 de Berlin, le Lenovo Yoga 920 succède assez logiquement au Yoga 910. On ne change pas une formule qui marche : entre les deux PC ultraportables hybrides convertibles, les différences semblent -somme toute- mineures. Notamment sur la forme. Un exemple ? La diagonale de l'écran tactile passe de 13,3 à 13,9 pouces mais la définition de base demeure le Full HD (même si la 4K est disponible sur certains modèles).</p><ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart"></a></li>
	        									<li class="compare"><a href="cart"></a></li>
	        								</ul>

	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						<div class="list__view mt--40">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product"><img src="images/product/2.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product"><img src="images/product/4.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product">Apple MacBook 12" MNYN2LL/A 512GB (Rose Gold)</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Annoncé à l'occasion de l'IFA 2017 de Berlin, le Lenovo Yoga 920 succède assez logiquement au Yoga 910. On ne change pas une formule qui marche : entre les deux PC ultraportables hybrides convertibles, les différences semblent -somme toute- mineures. Notamment sur la forme. Un exemple ? La diagonale de l'écran tactile passe de 13,3 à 13,9 pouces mais la définition de base demeure le Full HD (même si la 4K est disponible sur certains modèles).</p><ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart"></a></li>
	        									<li class="compare"><a href="cart"></a></li>
	        								</ul>

	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						<div class="list__view mt--40">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product"><img src="images/product/3.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product"><img src="images/product/6.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product">Apple MacBook 12" MNYN2LL/A 512GB (Rose Gold)</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Annoncé à l'occasion de l'IFA 2017 de Berlin, le Lenovo Yoga 920 succède assez logiquement au Yoga 910. On ne change pas une formule qui marche : entre les deux PC ultraportables hybrides convertibles, les différences semblent -somme toute- mineures. Notamment sur la forme. Un exemple ? La diagonale de l'écran tactile passe de 13,3 à 13,9 pouces mais la définition de base demeure le Full HD (même si la 4K est disponible sur certains modèles).</p><ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart"></a></li>
	        									<li class="compare"><a href="cart"></a></li>
	        								</ul>

	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						<div class="list__view mt--40">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product"><img src="images/product/4.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product"><img src="images/product/6.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product">Apple MacBook Pro 15" Touch Bar MPTU2LL/A 256GB (Silver)</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Annoncé à l'occasion de l'IFA 2017 de Berlin, le Lenovo Yoga 920 succède assez logiquement au Yoga 910. On ne change pas une formule qui marche : entre les deux PC ultraportables hybrides convertibles, les différences semblent -somme toute- mineures. Notamment sur la forme. Un exemple ? La diagonale de l'écran tactile passe de 13,3 à 13,9 pouces mais la définition de base demeure le Full HD (même si la 4K est disponible sur certains modèles).</p><ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart"></a></li>
	        									<li class="compare"><a href="cart"></a></li>
	        								</ul>

	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						<div class="list__view mt--40">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product"><img src="images/product/5.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product"><img src="images/product/9.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product">Lenovo IdeaPad YOGA 920-13IKB 80Y7001RRK (Copper)</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Annoncé à l'occasion de l'IFA 2017 de Berlin, le Lenovo Yoga 920 succède assez logiquement au Yoga 910. On ne change pas une formule qui marche : entre les deux PC ultraportables hybrides convertibles, les différences semblent -somme toute- mineures. Notamment sur la forme. Un exemple ? La diagonale de l'écran tactile passe de 13,3 à 13,9 pouces mais la définition de base demeure le Full HD (même si la 4K est disponible sur certains modèles).</p><ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart"></a></li>
	        									<li class="compare"><a href="cart"></a></li>
	        								</ul>
	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->
@endsection		
		