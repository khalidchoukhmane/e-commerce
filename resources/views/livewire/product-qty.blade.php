<div class="cart-main-area section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ol-lg-12">
                <form action="#">
                    <div class="table-content wnro__table table-responsive">
                        <table>
                            <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Produit</th>
                                    <th class="product-price">Prix</th>
                                    <th class="product-quantity">Quantité</th>
                                    <th class="product-subtotal">Totale</th>
                                    <th class="product-remove">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $cart_content)
                                <tr>
                                    <td class="product-thumbnail"><a><img src="images/product/serveur-dell.jpg" alt="product img"></a></td>
                                    <td class="product-name"><a>{{ $cart_content->name }}</a></td>
                                    <td class="product-price"><span class="amount">{{ $cart_content->price }}</td>
                                    <td class="product-quantity">
                                        <div>

                                            <button class="btn-sm btn-secondary" wire:click="decrementQty('{{ $cart_content->rowId }}')">-</button>

                                            <strong style="margin-left:6px; margin-right:6px;"> {{ $cart_content->qty }}</strong>

                                            <button class="btn-sm btn-secondary" wire:click="incrementQty('{{ $cart_content->rowId }}')">+</button>


                                        </div>
                                    </td>
                                    <td class="product-subtotal">{{ $cart_content->price }}</td>
                                    <td class="">
                                        <a class="btn btn-danger" href="{{ url('/remove/'.$cart_content->rowId) }}" onclick="return confirm('êtes-vous sûr?')">X</a>
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
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="cartbox__total__area">
                    <div class="cartbox-total d-flex justify-content-between">
                        <ul class="cart__total__list">
                            <li>Montant du panier</li>
                            <li>Sous-total</li>
                        </ul>
                        <ul class="cart__total__tk">
                            <li>$3104</li>
                            <li>{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal(); }}</li>
                        </ul>
                    </div>
                    <div class="cart__total__amount">
                        <span>Total</span>
                        <span>{{ \Gloudemans\Shoppingcart\Facades\Cart::total(); }}</span>
                    </div>
                    <br><br>
                    @guest
                        <div class="product-add-to-cart" style="margin-left:65%; ">
                            <a href="{{ route('register') }}">Passer à la caisse</a>
                        </div>
                    @else
                        @if (\Gloudemans\Shoppingcart\Facades\Cart::content()->count() >= 1 )
                        <div class="product-add-to-cart" style="margin-left:65%; ">
                            <a href="/checkout">Passer à la caisse</a>
                        </div>
                        @else
                        <div class="product-add-to-cart" style="margin-left:65%; ">
                            <a href="{{route('cart')}}">Passer à la caisse</a>
                        </div>
                        @endif
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
