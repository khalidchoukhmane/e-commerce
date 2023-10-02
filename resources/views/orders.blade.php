
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
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Panier</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="accueil">Accueil</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Panier</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">               
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-name">Produits</th>
                                            <th class="product-price">Prix Total</th>
                                            <th class="product-quantity">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                        <tr>
                                            <td class="product-name"><a>{{ $order->produits }}</a></td>
                                            <td class="product-price"><span class="amount">{{ $order->prix_total }}</td>
                                            <td class="product-quantity">
                                                <div>   
                                                    @if($order->status == 'Validé')
                                                        <a class="btn btn-green">{{$order->status}}</a>
                                                    @else
                                                        <a class="btn btn-danger">{{$order->status}}</a>
                                                    @endif

                                                </div>    
                                            </td>
                                        </tr>
                                        @endforeach
        
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                        <div class="cartbox__btn">
                        
                        </div>
                    </div>
                </div>

            </div>  
        </div>
        <!-- cart-main-area end -->
@endsection		