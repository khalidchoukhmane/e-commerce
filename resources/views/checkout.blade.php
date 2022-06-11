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
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Checkout</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="/accueil">Accueil</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Checkout Area -->
        <section class="wn__checkout__area section-padding--lg bg__white">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-6 col-12">
        				<div class="customer_details">
        					<h3>Détails de la facturation</h3>
							@if (!is_null($user->prenom))
								<form method="POST" action="/checkout.store">
									@csrf

										<div class="customar__field">
											<div class="margin_between">
												<div class="input_box space_between">
													<label>Prénom <span>*</span></label>
													<input type="text" name="prenom" value="{{$user->prenom }}">
												</div>
												<div class="input_box space_between">
													<label>Nom <span>*</span></label>
													<input type="text" name="nom" value="{{$user->nom }}">
												</div>
											</div>
											<div class="input_box">
												<label>Nom de l'entreprise<span>*</span></label>
												<input type="text" name="entreprise_nom" value="{{$user->entreprise_nom }}">
											</div>
											<div class="input_box">
												<label>Pays<span>*</span></label>
												<select class="select__option" name="pays">
													@foreach ($countries as $country)
														<option value="{{$country->id }}">{{$country->pays }}</option>
													@endforeach
												</select>
											</div>
											<div class="input_box">
												<label>Address <span>*</span></label>
												<input type="text" name="adresse" value="{{$user->adresse }}" placeholder="Street address">
											</div>
											<div class="input_box">
												<label>Code Postal / ZIP <span>*</span></label>
												<input type="text" name="code_postal" value="{{$user->code_postal }}">
											</div>
											<div class="margin_between">
												<div class="input_box space_between">
													<label>Téléphoner <span>*</span></label>
													<input type="text" name="telephone" value="{{$user->telephone }}">
												</div>
											</div>
										</div>	
								
								<br><br>
									<div class="product-add-to-cart" style="margin-left:65%; ">
										<button type="submit" class="btn btn-primary">Commander</button>
									</div>
								</form>
							@else
							<form method="POST" action="/checkout.store">
								@csrf

									<div class="customar__field">
										<div class="margin_between">
											<div class="input_box space_between">
												<label>Prénom <span>*</span></label>
												<input type="text" name="prenom">
											</div>
											<div class="input_box space_between">
												<label>Nom <span>*</span></label>
												<input type="text" name="nom">
											</div>
										</div>
										<div class="input_box">
											<label>Nom de l'entreprise<span>*</span></label>
											<input type="text" name="entreprise_nom">
										</div>
										<div class="input_box">
											<label>Pays<span>*</span></label>
											<select class="select__option" name="pays">
												@foreach ($countries as $country)
													<option value="{{$country->id }}">{{$country->pays }}</option>
												@endforeach
											</select>
										</div>
										<div class="input_box">
											<label>Address <span>*</span></label>
											<input type="text" name="adresse" placeholder="Street address">
										</div>
										<div class="input_box">
											<label>Code Postal / ZIP <span>*</span></label>
											<input type="text" name="code_postal">
										</div>
										<div class="margin_between">
											<div class="input_box space_between">
												<label>Téléphoner <span>*</span></label>
												<input type="text" name="telephone">
											</div>
										</div>
									</div>	
							
								<br><br>
								<div class="product-add-to-cart" style="margin-left:65%; ">
									<button type="submit" class="btn btn-primary">Commander</button>
								</div>
							</form>
							@endif

						</div>	
					 
        			</div>

					
        			<div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__order__box">
        					<h3 class="onder__title">Votre commande</h3>
        					<ul class="order__total">
        						<li>Produit</li>
        						<li>Totale</li>
        					</ul>
        					<ul class="order_product">

								@foreach ($cart as $cart_content)
									<li>{{$cart_content->name}}  × {{ $cart_content->qty }}<span>{{ $cart_content->price }}</span></li>
								@endforeach


        					</ul>
        					<ul class="shipping__method">
        						<li>Panier Sous-total <span>{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal(); }}</span></li>
        					</ul>
        					<ul class="total__amount">
        						<li>Total de la commande <span>{{ \Gloudemans\Shoppingcart\Facades\Cart::total(); }}</span></li>
        					</ul>
        				</div>
					    <div id="accordion" class="checkout_accordion mt--30" role="tablist">
						    <div class="payment">
						        <div class="che__header" role="tab" id="headingThree">
						          	<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							            <span>Paiement à la livraison</span>
						          	</a>
						        </div>
						        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
					          		<div class="payment-body">Payez en espèces à la livraison.</div>
						        </div>
						    </div>
					    </div>

        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Checkout Area -->
@endsection		