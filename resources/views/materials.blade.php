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
                              <span class="breadcrumb_item active">materials</span>
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

						@include('layouts.sidebar')

							<br><br>
        					<aside class="wedget__categories sidebar--banner">
								<img src="{{ asset('images/others/banner_left.jpg')}}" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
        					</aside>
							<br><br><br>

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
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        						<!-- Start Single Product -->
									@foreach ($materials as $material)
									@if($material->type != 'Hot')
									
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="{{ $material->image }}" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="{{ $material->image }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">{{ $material->libelle }}</a></h4>
											<ul class="prize d-flex">
												<li>{{ $material->new_price }}</li>
												<li class="old_prize">{{ $material->previous_price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li>
															<form  action="{{ route('cart.store') }}" method="POST">
																@csrf
																<input type="hidden" name="product_id" value="{{ $material->id }}">
																<button class="btn btn-light cart bi bi-shopping-cart-full"></button>
															</form>											
														</li>
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
									@else
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product"><img src="{{$material->image }}" alt="product image"></a>
											<a class="second__img animation1" href="single-product"><img src="{{ $material->image}}" alt="product image"></a>
											<div class="hot__box color--2">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product">{{ $material->libelle }}</a></h4>
											<ul class="prize d-flex">
												<li>{{ $material->new_price }}</li>
												<li class="old_prize">{{ $material->previous_price }}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li>
															<form  action="{{ route('cart.store') }}" method="POST">
																@csrf
																<input type="hidden" name="product_id" value="{{ $material->id }}">
																<button class="btn btn-light cart bi bi-shopping-cart-full"></button>
															</form>											
														</li>
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
									@endif
									@endforeach
		        					<!-- End Single Product -->
	        					</div>
	        				</div>
	        				<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
	        					<div class="list__view__wrapper">
	        						<!-- Start Single Product -->
									@foreach ($materials as $material)

	        						<div class="list__view">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product"><img src="{{ $material->image}}" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product"><img src="{{ $material->image}}" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product">{{ $material->libelle }}</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>{{ $material->new_price }}</li>
	        									<li class="old__prize">{{ $material->previous_price }}</li>
	        								</ul>
											<ul class="cart__action d-flex">
												<li>
													<form  action="{{ route('cart.store') }}" method="POST">
														@csrf
														<input type="hidden" name="product_id" value="{{ $material->id }}">
														<button class="btn btn-primary bi bi-shopping-cart-full"></button>
													</form>											
												</li>
	        								</ul>

	        							</div>
	        						</div>
									<br><br>

									@endforeach
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