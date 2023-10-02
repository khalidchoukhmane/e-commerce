<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Ordre;

class OrdersController extends Controller
{
    public function index()
    {

        $userId = Auth::id();

        $orders = Ordre::where('user_id', '=', $userId)->get();
        return view('orders',compact('orders'));
    }
}
