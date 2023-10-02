<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErpController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServeurController;
use App\Http\Controllers\ImprimanteController;
use App\Http\Controllers\OrdinateurFixController;
use App\Http\Controllers\CreationSiteWebController;
use App\Http\Controllers\OrdinateurPortableController;
use App\Http\Controllers\AccueilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Menu Start




Route::get('/accueil', [AccueilController::class, 'index'])
    ->name('home');

Route::post('/accueil', [App\Http\Controllers\AccueilController::class, 'store'])->name('cart.store');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('remove/{id}', [App\Http\Controllers\CartController::class, 'removeFromCart']);

Route::get('/', [AccueilController::class, 'index']);

Route::get('/mot-de-president', function () {
    return view('mot_du_president');
});

Route::get('/erp', [ErpController::class, 'index'] );

Route::get('/creation-des-sites-web', [CreationSiteWebController::class, 'index'] );

Route::get('/serveurs', [ServeurController::class, 'index'] );

Route::get('/ordinateurs-fixes', [OrdinateurFixController::class, 'index'] );

Route::get('/ordinateurs-portables', [OrdinateurPortableController::class, 'index'] );

Route::get('/imprimantes', [ImprimanteController::class, 'index'] );

Route::get('/orders', [App\Http\Controllers\OrdersController::class, 'index'] )->name('orders');

Route::get('/materiel', [App\Http\Controllers\MaterialsController::class, 'index'] )->name('materiels');

Route::get('materiel/{id}', [App\Http\Controllers\MaterialsController::class, 'goTo']);


Route::get('/services', function () {
    return view('services');
});



Route::get('/hebergements', function () {
    return view('hebergement');
});

Route::get('/contrat-de-maintenance', function () {
    return view('contrat_maintenance');
});

Route::get('/nos-references', function () {
    return view('nos_references');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact-us', [ContactController::class, 'store'])->name('CONTACT');
//Manu End


//Start Panier links
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->middleware('auth');

Route::post('/checkout', [App\Http\Controllers\CheckoutController::class, 'hebergement'])->middleware('auth')->name('hebergement.store');


Route::post('/checkout.store', [App\Http\Controllers\CheckoutController::class, 'store'])->middleware('auth');

Route::get('/produits', function () {
    return view('contact');
});

Route::get('/product-details', function () {
    return view('product-details');
});


//End Panier links

//Account Start

Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});





//account End