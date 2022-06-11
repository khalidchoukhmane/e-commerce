<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function index()
    {
        //$cart = Cart::content();
       // dd($cart);
        return view('cart');

    }

    public function removeFromCart($rowId)
    {
        Cart::remove($rowId);

        return back();
    }


}
