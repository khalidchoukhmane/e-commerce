<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class MaterialsController extends Controller
{
   public function index()
   {
   
      $categories =  Category::whereIn('id', [6, 7, 8, 9])->get();
      $materials =  Product::where('category_id', 6)->get();
      return view('materials', compact('materials','categories'));

   }

   public function goTo($id){


         $categories = Category::whereIn('id', [6, 7, 8, 9])->get();
         $materials =  Product::where('category_id', $id)->get();
         return view('materials', compact('materials', 'categories'));

      // dd('laded here');
   }
}
