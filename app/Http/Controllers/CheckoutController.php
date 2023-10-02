<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Order;
use App\Models\Ordre;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $user = User::where('id', '=' , $userId)->first();
        
        $order = new Ordre();
        $order->user_id = $user->id;
        $order->status = "En cours de validation";
        $order->prix_total = Cart::total();
        $cart = Cart::content();

        $i=0;
        $a = [];
        foreach($cart as $item)
        {
            $a[$i] = $item->name;
            $i++;
        }

        for($i=0;$i<count($a);$i++){
            $string = implode(",",$a);
        }

        $order->produits = $string;

        if($order->save()){
            Cart::destroy();
        }

        return redirect('/accueil');
    }

    public function hebergement(Request $request)
    {
        $userId = Auth::id();
        $user = User::where('id', '=' , $userId)->first();
        
        $order = new Ordre();
        $order->user_id = $user->id;
        $order->status = "En cours de validation";
        $order->prix_total = 0;
        $order->produits = $request->input('product_id');
        $order->save();

        return redirect('/hebergements');
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
