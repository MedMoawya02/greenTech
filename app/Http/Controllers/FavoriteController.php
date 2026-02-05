<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    //
    public function toggle(Product $product){
        auth()->user()->favorites()->toggle($product->id);
        return back();
    }

    public function favorites(){
        $products=auth()->user()->favorites()->latest()->get();
        return view('products.favoris',compact('products'));
    }
}
