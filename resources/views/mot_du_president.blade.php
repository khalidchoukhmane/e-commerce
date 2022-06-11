
@extends('layouts.master')

@section('content')		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
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
        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Achetez <span> vos</span></h2>
		            				<h2><span>produits</span> préférés</h2>
		            				<h2><span>d'ici</span></h2>
				                   	<a class="shopbtn" href="shop-grid">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Achetez <span> vos</span></h2>
		            				<h2><span>produits</span> préférés</h2>
		            				<h2><span>d'ici</span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Nouveaux <span class="color--theme">Produits</span></h2>
							
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product"><img src="images/books/1.jpg" alt="product image"></a>
								<a class="second__img animation1" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product">New XPS 15 Laptop</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$35.00</li>
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
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
								<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
								<div class="hot__box color--2">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product">Asus U4100UN i5-8250U 14" Ultraslim laptop 256 SSD </a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$35.00</li>
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
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product"><img src="images/books/5.jpg" alt="product image"></a>
								<a class="second__img animation1" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
								<ul class="prize d-flex">
									<li>$40.00</li>
									<li class="old_prize">$35.00</li>
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
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
								<a class="second__img animation1" href="single-product"><img src="images/books/8.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$50.00</li>
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
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
								<a class="second__img animation1" href="single-product"><img src="images/books/10.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product">Doctor Wldo</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$35.00</li>
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
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product"><img src="images/books/11.jpg" alt="product image"></a>
								<a class="second__img animation1" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALER</span>
								</div>
							</div>
							<div class="product__content content--center content--center">
								<h4><a href="single-product">Samsung's Notebook 9 Pro and Notebook 9 Flash Push Big Style</a></h4>
								<ul class="prize d-flex">
									<li>$50.00</li>
									<li class="old_prize">$35.00</li>
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
						<!-- Start Single Product -->
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start NEwsletter Area -->
		<section class="wn__newsletter__area bg-image--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2>Rester avec nous</h2>
						</div>
						<div class="newsletter__block text-center">
							<p>Abonnez-vous dès maintenant à nos newsletters et restez au courant des nouvelles collections, des derniers lookbooks et des offres exclusives.</p>
							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Enter your e-mail">
									<button>s'abonner</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End NEwsletter Area -->
		<!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Tous <span class="color--theme">les produits</span></h2>
							</div>
					</div>
				</div>
				<div class="row mt--50">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="product__nav nav justify-content-center" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-biographic" role="tab">LAPTOP</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure" role="tab">PHONE</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">TABLETS</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-cook" role="tab">WATCHES</a>
                        </div>
					</div>
				</div>
				<div class="tab__container mt--60">
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/1.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product">Notebook Hp New Elite 2019 I6 I7.3 I6gb 1tb Video 6gb Ssd</a></h4>
											<ul class="prize d-flex">
												<li>$50.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product">Notebook Hp New Elite 2019 I6 I7.3 I6gb 1tb Video 6gb Ssd</a></h4>
											<ul class="prize d-flex">
												<li>$50.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/5.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">Samsung's Notebook 9 Pro and Notebook 9 Flash Push Big Style</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/8.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">Computex 2019: HP's latest ENVY series laptop</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">Computex 2019: HP's latest ENVY series laptop</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$50.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/11.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">Lando</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$50.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">HP Spectre x360</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/12.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">HP Spectre x360</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"></a>HP Spectre x360</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">HP Spectre x360</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-biographic" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/1.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">HP Spectre x360</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/10.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/8.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">HP Spectre x360</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/1.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/11.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product" >HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/12.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/8.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-adventure" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/12.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/11.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/1.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/5.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/11.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/10.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/1.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/10.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-children" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/1.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/10.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/12.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/5.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/12.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/1.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-cook" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/10.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/7.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product" >HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/8.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/3.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="images/books/2.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product"> HP Envy X360 2 in 1 15.6” FHD IPS</a></h4>
											<ul class="prize d-flex">
												<li>$40.00</li>
												<li class="old_prize">$35.00</li>
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
								</div>
								<!-- Start Single Product -->
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
				</div>
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start Recent Post Area -->
		
						
		<!-- End Recent Post Area -->
		<!-- Best Sale Area -->
		<section class="best-seel-area pt--80 pb--60" style="background-color: #EFEFEF;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center pb--50">
							<h2 class="title__be--2">Best <span class="color--theme">Seller </span></h2>
							</div>
					</div>
				</div>
			</div>
			<div class="slider center">
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="single-product"><img src="images/best-sell-product/1.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
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
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="single-product"><img src="images/best-sell-product/2.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
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
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="single-product"><img src="images/best-sell-product/3.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
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
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="single-product"><img src="images/best-sell-product/4.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
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
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="single-product"><img src="images/best-sell-product/5.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
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
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="single-product"><img src="images/best-sell-product/6.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
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
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="single-product"><img src="images/best-sell-product/7.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
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
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="single-product"><img src="images/best-sell-product/8.jpg" alt="product image"></a>
					</div>
					<div class="product__content content--center">
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
				<!-- Single product end -->
			</div>
		</section>
		<!-- Best Sale Area Area -->
@endsection		