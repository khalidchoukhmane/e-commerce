@inject('inject','App\Injection\IndexInjection')

<header id="wn__header" class="header__area header__absolute sticky__header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-6 col-lg-2">
				<div class="logo">
					<a href="accueil">
						<img src="{{ asset('') }}" alt="" style="margin-top: 1%;height: 89px;">
					</a>
				</div>
			</div>
			<div class="col-lg-8 d-none d-lg-block">
				<nav class="mainmenu__nav">
					<ul class="meninmenu d-flex justify-content-start">
						@foreach($inject->getMenuTop() as $menu)
						<li class="drop"><a href="{{$menu->element}}">{{$menu->nom_element}}</a>
							@if(count($menu->kids))
							<div class="megamenu mega03">
								@foreach($menu->kids as $child)
								<ul class="item item03">
										<li><a href="{{$child->element}}" class="title">{{$child->nom_element}}</a></li>
										@foreach($child->kids as $kids)
											<li><a href="{{$kids->element}}">{{$kids->nom_element}}</a></li>
										@endforeach
								</ul>
								@endforeach
							</div>
							@endif
						</li>
						@endforeach
					</ul>
				</nav>
			</div>
			<div class="col-md-6 col-sm-6 col-6 col-lg-2">
				<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
					<li class="shopcart" ><a class="cartbox_active" href="#"><span class="product_qun">{{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }}</span></a>
						<!-- Start Shopping Cart -->
						<div class="block-minicart minicart__active">
							<div class="minicart-content-wrapper">
								<div class="micart__close">
									<span>close</span>
								</div>
								<div class="items-total d-flex justify-content-between">
									<span>{{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }} items</span>
									<span>Cart Subtotal</span>
								</div>
								<div class="total_amount text-right">
									<span>{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal(); }}</span>

								</div>
								@guest

								@else
                                @if (\Gloudemans\Shoppingcart\Facades\Cart::content()->count() >= 1 )
									<div class="mini_action checkout">
										<a class="checkout__btn" href="checkout">Aller à la caisse</a>
									</div>
								@endif
								@endguest
								<div class="single__items">
									<div class="miniproduct">
										@foreach (\Gloudemans\Shoppingcart\Facades\Cart::content() as $cart_content)
											<div class="item01 d-flex">
												<div class="thumb">
													<a href="product-details"><img src="images/product/sm-img/2.jpg"
															alt="product images"></a>
												</div>
												<div class="content">
													<h6><a href="product-details"> {{ $cart_content->name }} </a></h6>
													<span class="prize">{{ $cart_content->price }} </span>
													<div class="product_prize d-flex justify-content-between">
														<span class="qun">{{ $cart_content->qty }}</span>
														<ul class="d-flex justify-content-end">
															<li><a href="cart"><i class="zmdi zmdi-settings"></i></a></li>
															<li><a href="{{ url('/remove/'.$cart_content->rowId) }}" onclick="return confirm('êtes-vous sûr?')">
																<i class="zmdi zmdi-delete"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										@endforeach

									</div>
								</div>
								<div class="mini_action cart">
									<a class="cart__btn" href="cart">Afficher et modifier le panier</a>
								</div>
							</div>
						</div>
						<!-- End Shopping Cart -->
					</li>
					<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
						<div class="searchbar__content setting__block">
							<div class="content-inner">
								<div class="switcher-currency">
									<!-- Right Side Of Navbar -->
									<ul class="navbar-nav ml-auto">
										<!-- Authentication Links -->
										@guest
											<li class="nav-item">
												<a class="nav-link" href="{{ route('login') }}">{{ __('S\'identifier') }}</a>
											</li>
											@if (Route::has('register'))
												<li class="nav-item">
													<a class="nav-link" href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
												</li>
											@endif
										@else
											<li class="nav-item dropdown">
												<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
													{{ Auth::user()->name }}
												</a>

												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
													<a class="dropdown-item" href="{{ route('logout') }}"
													   onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
													</a>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
													</form>
												</div>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{ route('orders') }}">{{ __('Mes commandes') }}</a>
											</li>
										@endguest
									</ul>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- Start Mobile Menu -->
		<div class="row d-none">
			<div class="col-lg-12 d-none">
				<nav class="mobilemenu__nav">
					<ul class="meninmenu">
						<li><a href="index">Home</a></li>
						<li><a href="#">About</a>
							<ul>
								<li><a href="about">About Page</a></li>
								<li><a href="portfolio">Portfolio</a>
									<ul>
										<li><a href="portfolio">Portfolio</a></li>
										<li><a href="portfolio-details">Portfolio Details</a></li>
									</ul>
								</li>
								<li><a href="my-account">My Account</a></li>
								<li><a href="cart">Cart Page</a></li>
								<li><a href="checkout">Checkout Page</a></li>
								<li><a href="wishlist">Wishlist Page</a></li>
								<li><a href="error404">404 Page</a></li>
								<li><a href="faq">Faq Page</a></li>
								<li><a href="team">Team Page</a></li>
							</ul>
						</li>
						<li><a href="shop-grid">Shop</a>
							<ul>
								<li><a href="shop-grid">Shop Grid</a></li>
								<li><a href="single-product">Single Product</a></li>
							</ul>
						</li>
						<li><a href="blog">Blog</a>
							<ul>
								<li><a href="blog">Blog Page</a></li>
								<li><a href="blog-details">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="contact">Contacter</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- End Mobile Menu -->
		<div class="mobile-menu d-block d-lg-none">
		</div>
		<!-- Mobile Menu -->
	</div>
</header>
