<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\User;
use App\Models\Country;
use App\Models\Order;
use Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = User::where('id', '=' , $userId)->first();
        //dd($user->id);
        $cart = Cart::content();
        $countries = Country::all();

        return view('checkout', compact('cart', 'user', 'countries'));
    }


    public function store(Request $request)
    {

        

        $userId = Auth::id();

        User::where('id', '=', $userId)
            ->update([
                'prenom' => $request->input('prenom'),
                'nom' => $request->input('nom'),
                'entreprise_nom' => $request->input('entreprise_nom'),
                'id_pays' => $request->input('pays'),
                'adresse' => $request->input('adresse'),
                'code_postal' => $request->input('code_postal'),
                'telephone' => $request->input('telephone')
            ]);
        // $fillable = ['id_product'];

        // Order::create([
        //         'id_product' => 1,
        //         'id_user' => 1
        //     ]);

        return redirect('checkout');
    }
}
