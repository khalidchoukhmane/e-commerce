<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;


class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits =  Product::all();
        $serveurs =  Product::where('category_id', 6)->get();
        $ordinateurs_fixes =  Product::where('category_id', 7)->get();
        $ordinateurs_portables =  Product::where('category_id', 8)->get();
        $imprimants =  Product::where('category_id', 9)->get();
        //dd($produits);
        return view('accueil', compact('produits', 'serveurs', 'ordinateurs_fixes', 'ordinateurs_portables', 'imprimants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= Product::findOrFail($request->input('product_id'));

        Cart::add(
            $product->id, 
            $product->libelle, 
            1,
            $product->new_price
            );

        return redirect()->route('home')->with('message', 'bien ajouter a votre panier');    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
