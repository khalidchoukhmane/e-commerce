<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class ProductQty extends Component
{
    // public $qty = 0;

    public function incrementQty($rowId)
    {
        $cartItem =  Cart::get($rowId);
        Cart::update($rowId, $cartItem->qty + 1);
        
    }
    
    public function decrementQty($rowId)
    {
        $cartItem =  Cart::get($rowId);
        Cart::update($rowId, $cartItem->qty - 1);
        
    }

    public function render()
    {
        $cart = Cart::content();

        return view('livewire.product-qty', compact('cart'));
    }


}
